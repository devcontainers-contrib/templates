#!/bin/bash -e

for id in test/*; do
  if [[ -f $id ]]; then
    continue
  fi

  id="$(basename "$id")"

  echo "Testing $id..."
  tmp="$(mktemp -d)"
  rsync -av "src/$id/.devcontainer/" "$tmp/.devcontainer/"
  rsync -av "test/$id/" "$tmp/"
  tools/instantiate-template.js "$tmp/.devcontainer/devcontainer.json" "src/$id/devcontainer-template.json" "test/$id/options.json"
  devcontainer up --workspace-folder "$tmp"
  devcontainer exec --workspace-folder "$tmp" /bin/sh -c '
    set -e
    chmod +x test.sh
    ./test.sh
  '
  rm -rf "$tmp"
  echo "Done! Passed! $id"
done
