#!/bin/bash -e

for id in test/*; do
  if [[ -f $id ]]; then
    continue
  fi

  id="$(basename "$id")"
  if [[ $id == "test-utils" ]]; then
    continue
  fi

  echo "Testing $id..."
  tmp="$(mktemp -d)"
  rsync -av "src/$id/.devcontainer/" "$tmp/.devcontainer/"
  rsync -av "test/$id/" "$tmp/"
  cp tools/test-utils.sh "$tmp/test-utils.sh"
  chmod +x "$tmp/test.sh"
  tree -a "$tmp"
  tools/instantiate-template.mjs "$tmp/.devcontainer/devcontainer.json" "src/$id/devcontainer-template.json" "test/$id/options.json"
  devcontainer up --workspace-folder "$tmp"
  devcontainer exec --workspace-folder "$tmp" ./test.sh
  rm -rf "$tmp"
  echo "Done! Passed! $id"
done
