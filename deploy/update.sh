#!/usr/bin/env bash
set -euo pipefail

cd /opt/greenline
exec 9>update.lock
flock -n 9 || exit 0

git --git-dir=repository.git fetch --no-tags origin '+refs/heads/master:refs/remotes/origin/master'
revision=$(git --git-dir=repository.git rev-parse refs/remotes/origin/master)
release="/opt/greenline/releases/$revision"
previous=$(readlink -f current || true)

if [[ "$previous" == "$release" ]]; then
    exit 0
fi
if ! git --git-dir=repository.git cat-file -e "$revision:Dockerfile"; then
    echo "Waiting for the Docker deployment commit on master."
    exit 0
fi

install -d "$release"
git --git-dir=repository.git archive "$revision" | tar -x -C "$release"
compose() {
    local directory=$1 project=$2 port=$3 tag=$4
    shift 4
    GREENLINE_REVISION="$tag" GREENLINE_PORT="$port" docker compose \
        --project-name "$project" --env-file /opt/greenline/production.env \
        --project-directory "$directory" -f "$directory/docker-compose.yml" "$@"
}

compose "$release" greenline 18080 "$revision" build
trap 'compose "$release" greenline-candidate 18081 "$revision" down --remove-orphans' EXIT
compose "$release" greenline-candidate 18081 "$revision" up --no-build --wait --wait-timeout 70
compose "$release" greenline-candidate 18081 "$revision" down --remove-orphans
trap - EXIT

if ! compose "$release" greenline 18080 "$revision" up --no-build --wait --wait-timeout 70; then
    if [[ -n "$previous" && -d "$previous" ]]; then
        compose "$previous" greenline 18080 "${previous##*/}" up --no-build --wait --wait-timeout 70
    fi
    exit 1
fi
ln -sfn "$release" current
