# Summarise Corporate — DigitalOcean deploy runbook

Server: `159.65.154.129` · Deploy user: `deploy` · Web root:
`/home/deploy/static-sites/SUMMARISE-WEBSITE`

This runbook replaces the first-draft sequence — the original had a
Markdown link inside the `server_name` directive (would break `nginx -t`)
and no clean-URL rewrites (every page would 404 because the site links
to `/about`, `/services/insurance` etc., not `/about.php`). Both are
fixed in the tracked nginx config at `deploy/nginx/summarise.in.conf`.

---

## First-time deploy

### 1. SSH in and pull the repo

```bash
ssh deploy@159.65.154.129
cd /home/deploy/static-sites
git clone https://github.com/AdminITDGL/SUMMARISE-WEBSITE.git
cd SUMMARISE-WEBSITE
```

If the repo is private, git will prompt for credentials. Use a
**fine-scoped Personal Access Token** with only `repo` read/clone
access — never a token with write permission to your whole
organisation.

### 2. Install the nginx server block

The corrected config lives in the repo at
`deploy/nginx/summarise.in.conf`. Copy it into nginx's sites-available:

```bash
sudo cp /home/deploy/static-sites/SUMMARISE-WEBSITE/deploy/nginx/summarise.in.conf \
        /etc/nginx/sites-available/SUMMARISE-WEBSITE

# Enable the site
sudo ln -sf /etc/nginx/sites-available/SUMMARISE-WEBSITE \
            /etc/nginx/sites-enabled/SUMMARISE-WEBSITE

# Verify syntax before reloading — this catches bad server_name lines etc.
sudo nginx -t

# If nginx -t says "syntax is ok" AND "test is successful", reload:
sudo systemctl reload nginx
```

The config expects PHP-FPM 7.2 (matches the socket path in the current
runbook). If the droplet is running a different PHP version, edit the
one `fastcgi_pass` line in the config — inline comments in the file
list the exact socket paths for 7.4 / 8.0 / 8.1 / 8.2.

### 3. Point DNS at the droplet

At `domains.google.com` → `summarise.in` → DNS → Custom records:

| Type | Host | Data           | TTL  |
|------|------|----------------|------|
| A    | `@`  | `159.65.154.129` | 3600 |
| A    | `www`| `159.65.154.129` | 3600 |

**Before adding, delete** any existing `www` CNAME pointing at
`summarise-corporate.vercel.app` (the old staging URL from the audit)
and any A records pointing at Vercel's `76.76.21.21`.

Propagation takes 15 min – 2 hours. Test with:

```bash
dig www.summarise.in +short   # should return 159.65.154.129
```

### 4. Enable HTTPS with Let's Encrypt

Once DNS is resolving to the droplet:

```bash
sudo apt-get install -y certbot python3-certbot-nginx
sudo certbot --nginx -d www.summarise.in -d summarise.in \
     --agree-tos --redirect --email connect@summarise.in
```

Certbot will:
- Provision the certificate
- Rewrite the nginx config to listen on 443 with SSL
- Redirect port 80 → 443 (once you pass `--redirect`)
- Set up auto-renewal via a systemd timer

Verify auto-renewal:

```bash
sudo systemctl status certbot.timer
sudo certbot renew --dry-run
```

After HTTPS is live, **uncomment the HSTS line** near the top of the
nginx config and reload:

```
add_header Strict-Transport-Security "max-age=31536000; includeSubDomains; preload" always;
```

### 5. Google Search Console

Once `https://www.summarise.in` is live:

1. [search.google.com/search-console](https://search.google.com/search-console) →
   Add property → URL prefix → `https://www.summarise.in/`
2. Verify via HTML tag → copy the `content=""` value
3. Paste that value into `GSC_VERIFICATION_CODE` in `includes/config.php`
4. Commit, push, and redeploy (§7 below)
5. In Search Console → Sitemaps → submit `sitemap.xml`

---

## Subsequent deploys — automated via GitHub Actions

Once **Enable push-to-deploy** below is done once, every subsequent
change lands like this:

1. Someone (or Claude) pushes to `main` on the repo
2. GitHub Actions runs `.github/workflows/deploy.yml`
3. The workflow SSHs into the droplet as `deploy`, runs
   `git pull` and `bash deploy/deploy.sh`
4. `deploy.sh` re-syncs the nginx config if it changed, runs
   `nginx -t`, and reloads nginx if the test passed
5. Site is live within ~15 seconds of the push

Manual deploy is still possible for hotfixes:

```bash
ssh deploy@159.65.154.129
cd /home/deploy/static-sites/SUMMARISE-WEBSITE
git pull origin main
bash deploy/deploy.sh
```

---

## Enable push-to-deploy (one time)

The GitHub Actions workflow at `.github/workflows/deploy.yml` needs
four repository secrets and a corresponding SSH public key on the
droplet.

### Generate a dedicated SSH key pair for GitHub

On any machine you trust — **not** on the droplet, not on a laptop you
share:

```bash
ssh-keygen -t ed25519 -f ~/.ssh/summarise_gh_deploy -C "github-actions@summarise" -N ""
```

This creates two files:
- `~/.ssh/summarise_gh_deploy`      — private key (stays with the pair,
                                       goes into a GitHub secret)
- `~/.ssh/summarise_gh_deploy.pub`  — public key (goes on the droplet)

### Put the public key on the droplet

```bash
ssh deploy@159.65.154.129 "mkdir -p ~/.ssh && chmod 700 ~/.ssh"
scp ~/.ssh/summarise_gh_deploy.pub deploy@159.65.154.129:~/gh_key.pub
ssh deploy@159.65.154.129 "cat ~/gh_key.pub >> ~/.ssh/authorized_keys && chmod 600 ~/.ssh/authorized_keys && rm ~/gh_key.pub"
```

### Grant `deploy` passwordless sudo for the two commands the script uses

Because `deploy.sh` runs `sudo cp` and `sudo systemctl reload nginx`,
the deploy user needs NOPASSWD sudo for those specific commands.

```bash
ssh deploy@159.65.154.129
sudo visudo -f /etc/sudoers.d/deploy-summarise
```

Paste this exact content:

```
deploy ALL=(root) NOPASSWD: /bin/cp, /bin/ln, /usr/sbin/nginx, /bin/systemctl reload nginx, /usr/bin/chown, /usr/bin/find, /usr/bin/chmod
```

Save (Ctrl+X → Y → Enter) and exit. Quick sanity check:

```bash
sudo -n /usr/sbin/nginx -t
# → should print "syntax is ok" WITHOUT prompting for a password
```

### Add the four secrets to GitHub

Open [github.com/AdminITDGL/SUMMARISE-WEBSITE/settings/secrets/actions](https://github.com/AdminITDGL/SUMMARISE-WEBSITE/settings/secrets/actions)
→ **New repository secret** for each:

| Name              | Value                                                    |
|-------------------|----------------------------------------------------------|
| `SSH_HOST`        | `159.65.154.129`                                         |
| `SSH_USER`        | `deploy`                                                 |
| `SSH_PORT`        | `22`                                                     |
| `SSH_PRIVATE_KEY` | The full content of `~/.ssh/summarise_gh_deploy` (private key) — paste all lines including `-----BEGIN OPENSSH PRIVATE KEY-----` and `-----END OPENSSH PRIVATE KEY-----` |

### First test

Trigger a manual run from
[github.com/AdminITDGL/SUMMARISE-WEBSITE/actions/workflows/deploy.yml](https://github.com/AdminITDGL/SUMMARISE-WEBSITE/actions/workflows/deploy.yml)
→ **Run workflow** → **main** → **Run workflow**. Watch the log — you
want to see:

```
▸ Pulling latest…
▸ HEAD is now <sha>
▸ Running deploy script…
✓ nginx reloaded  (or: ▸ nginx config unchanged)
✓ deploy.sh finished
✓ Deploy complete
```

From that point on, every `git push` to `main` deploys automatically.

---

## Rollback if a deploy breaks the site

`git log --oneline` on the server to find the last good commit, then:

```bash
git reset --hard <good-commit-sha>
```

Because there's no build artefact, this reverts instantly. Nginx keeps
serving; PHP-FPM picks up the reverted files on the next request.

---

## Security / operational notes

- **Do not commit the deploy credentials, GitHub PAT, or SSH password
  to this repo or paste them into chat or issue trackers.** Rotate any
  that leak.
- The nginx config denies `/includes/` and any dot-file
  (`.git`, `.env`, `.htaccess`, etc.).
- After Certbot, verify SSL grade at
  [ssllabs.com/ssltest/analyze.html?d=www.summarise.in](https://www.ssllabs.com/ssltest/analyze.html?d=www.summarise.in) — target A+.
- The droplet's PHP is currently 7.2, which reached end-of-life in
  November 2020. It still runs this site (no PHP-8-only syntax used),
  but planning an upgrade to PHP 8.x is a security win. When you
  upgrade, the only site-side change is one `fastcgi_pass` line in the
  nginx config.
- Contact form and self-check widget currently POST to FormSubmit.co
  as a static-host fallback. Once the site is live on the droplet
  with `mail()` or SMTP configured, we can replace those endpoints
  with a native `contact-submit.php` handler. Ping when you're ready.
