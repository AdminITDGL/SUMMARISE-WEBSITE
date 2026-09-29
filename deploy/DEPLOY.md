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

## Subsequent deploys (updating the site)

```bash
ssh deploy@159.65.154.129
cd /home/deploy/static-sites/SUMMARISE-WEBSITE
git pull origin main
# No build step needed — PHP is served directly.
# If you changed the nginx config, also copy it into place and reload:
sudo cp deploy/nginx/summarise.in.conf /etc/nginx/sites-available/SUMMARISE-WEBSITE
sudo nginx -t && sudo systemctl reload nginx
```

That's it. No compile, no bundler, no restart-fpm needed unless you
change PHP config.

---

## Optional: automate the "git pull" as a webhook

Once you're used to the manual flow, wire a small PHP endpoint on the
droplet that runs `git pull` when GitHub POSTs a push webhook to it.
Ask if you want that added — it's ~30 lines of PHP + a GitHub webhook
secret.

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
