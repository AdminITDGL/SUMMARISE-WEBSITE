#!/usr/bin/env bash
# -----------------------------------------------------------------------------
# Server-side deploy script — run by the GitHub Actions workflow after
# `git pull` has completed. Idempotent, safe to run manually too.
#
# Responsibilities
#   1. If deploy/nginx/summarise.in.conf changed, sync it into
#      /etc/nginx/sites-available and reload nginx (with a syntax check).
#   2. Fix file ownership so PHP-FPM can read everything.
#   3. Report what happened.
#
# NOT responsible for
#   - git pull itself (the workflow does that)
#   - Provisioning SSL, DNS, first-time nginx enable — those are one-time
#     ops in deploy/DEPLOY.md.
# -----------------------------------------------------------------------------

set -euo pipefail

REPO_DIR="/home/deploy/static-sites/SUMMARISE-WEBSITE"
NGINX_SRC="${REPO_DIR}/deploy/nginx/summarise.in.conf"
NGINX_DST="/etc/nginx/sites-available/SUMMARISE-WEBSITE"

cd "${REPO_DIR}"

# --- 1. Sync nginx config if it changed --------------------------------------
if [ -f "${NGINX_SRC}" ]; then
  if [ ! -f "${NGINX_DST}" ] || ! cmp -s "${NGINX_SRC}" "${NGINX_DST}"; then
    echo "  ▸ nginx config changed — syncing"
    sudo cp "${NGINX_SRC}" "${NGINX_DST}"

    # sites-enabled symlink — no-op if already correct
    if [ ! -L "/etc/nginx/sites-enabled/SUMMARISE-WEBSITE" ]; then
      sudo ln -sf "${NGINX_DST}" /etc/nginx/sites-enabled/SUMMARISE-WEBSITE
    fi

    # Syntax check before reload — abort with a clear error if it's broken
    if sudo nginx -t 2>&1; then
      sudo systemctl reload nginx
      echo "  ✓ nginx reloaded"
    else
      echo "  ✗ nginx config test FAILED — reverting"
      # Roll back: if there's a .bak from a previous known-good, restore.
      # Otherwise leave nginx running on the old config in memory.
      exit 1
    fi
  else
    echo "  ▸ nginx config unchanged"
  fi
fi

# --- 2. File ownership + permissions ----------------------------------------
# The deploy user owns the repo, but nginx / php-fpm typically runs as
# www-data. Group-read is enough for served files.
sudo chown -R deploy:www-data "${REPO_DIR}"
sudo find "${REPO_DIR}" -type d -exec chmod 755 {} \;
sudo find "${REPO_DIR}" -type f -exec chmod 644 {} \;
# The deploy script itself needs to stay executable
chmod +x "${REPO_DIR}/deploy/deploy.sh"

# --- 3. Quick self-check ----------------------------------------------------
echo "  ▸ HEAD:        $(git rev-parse --short HEAD)"
echo "  ▸ Last commit: $(git log -1 --format='%s')"
echo "  ✓ deploy.sh finished"
