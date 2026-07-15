#!/usr/bin/env bash
# Deploy local AIM site to ipnacademy.in via SSH/rsync.
#
# Usage:
#   ./deploy.sh              # sync files changed in the last hour (+ ai hub assets)
#   ./deploy.sh --all        # sync entire project (excluding git, sql dumps, secrets)
#   ./deploy.sh --dry-run    # preview without uploading
#
# Setup (one time):
#   cp .deploy.env.example .deploy.env
#   chmod +x deploy.sh

set -euo pipefail

ROOT="$(cd "$(dirname "$0")" && pwd)"
cd "$ROOT"

REMOTE_USER="u262009927"
REMOTE_HOST="145.79.213.132"
REMOTE_PORT="65002"
REMOTE_PATH="/home/u262009927/domains/ipnacademy.in/public_html/aim"

SINCE_MINUTES=60
MODE="recent"
DRY_RUN=""

for arg in "$@"; do
  case "$arg" in
    --all) MODE="all" ;;
    --last-hour|--since-1h) MODE="recent" ;;
    --dry-run|-n) DRY_RUN="--dry-run" ;;
    -h|--help)
      sed -n '2,12p' "$0"
      exit 0
      ;;
  esac
done

if [[ -f "$ROOT/.deploy.env" ]]; then
  # shellcheck disable=SC1091
  set -a && source "$ROOT/.deploy.env" && set +a
fi

SSH_OPTS=(-p "$REMOTE_PORT" -o StrictHostKeyChecking=accept-new -o ConnectTimeout=20)

if [[ -n "${SSHPASS:-}" ]] && command -v sshpass >/dev/null 2>&1; then
  RSYNC_SSH="sshpass -e ssh ${SSH_OPTS[*]}"
  export SSHPASS
else
  RSYNC_SSH="ssh ${SSH_OPTS[*]}"
  echo "Tip: set SSHPASS in .deploy.env or use SSH keys to avoid password prompts."
fi

RSYNC_EXCLUDES=(
  --exclude '.git/'
  --exclude '.deploy.env'
  --exclude '.deploy.env.example'
  --exclude '*.sql'
  --exclude '.DS_Store'
  --exclude 'deploy.sh'
)

# Always sync these paths (small, page-critical assets even if not recently modified)
ALWAYS_SYNC=(
  "assets/img/ai"
)

DEST="${REMOTE_USER}@${REMOTE_HOST}:${REMOTE_PATH}/"

echo "Deploy target: ${DEST}"
echo "Mode: ${MODE}${DRY_RUN:+ (dry run)}"
echo

append_always_sync() {
  local list_file="$1"
  local dir rel f
  for dir in "${ALWAYS_SYNC[@]}"; do
    if [[ -d "$ROOT/$dir" ]]; then
      while IFS= read -r f; do
        rel="${f#"$ROOT"/}"
        [[ -n "$rel" ]] && printf '%s\n' "$rel"
      done < <(find "$ROOT/$dir" -type f ! -name '.DS_Store')
    fi
  done >> "$list_file"
  sort -u "$list_file" -o "$list_file"
}

if [[ "$MODE" == "recent" ]]; then
  FILE_LIST="$(mktemp)"
  find "$ROOT" -type f -mmin "-${SINCE_MINUTES}" \
    ! -path "$ROOT/.git/*" \
    ! -name '.deploy.env' \
    ! -name '.DS_Store' \
    ! -name '*.sql' \
    | sed "s|^$ROOT/||" > "$FILE_LIST"

  append_always_sync "$FILE_LIST"

  if [[ ! -s "$FILE_LIST" ]]; then
    echo "No files changed in the last ${SINCE_MINUTES} minutes."
    rm -f "$FILE_LIST"
    exit 0
  fi

  echo "Uploading $(wc -l < "$FILE_LIST" | tr -d ' ') file(s):"
  cat "$FILE_LIST"
  echo

  rsync -avz $DRY_RUN -e "$RSYNC_SSH" \
    "${RSYNC_EXCLUDES[@]}" \
    --files-from="$FILE_LIST" \
    "$ROOT/" "$DEST"

  rm -f "$FILE_LIST"
else
  rsync -avz $DRY_RUN -e "$RSYNC_SSH" \
    "${RSYNC_EXCLUDES[@]}" \
    "$ROOT/" "$DEST"
fi

echo
echo "Deploy complete."
