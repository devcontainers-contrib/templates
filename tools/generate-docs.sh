#!/bin/bash -e

anyssg() {
  local ua='Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36'
  local host="$(echo "$1" | awk -F[/] '{print $3}')"
  local tmp="$(mktemp -d)"
  httrack -O "$tmp" -s0 -F "$ua" "$1" | cat
  rsync -av "$tmp/${host/:/_}/" "$2/"
  rm -rf "$tmp"
}

cd docs
php -S 0.0.0.0:8000 -c . -t pages src/router.php &
php_pid=$!
sleep 1
anyssg http://0.0.0.0:8000/ dist
kill $php_pid
