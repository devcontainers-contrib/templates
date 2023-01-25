#!/bin/bash -e

# https://webinstall.dev/
su "$_REMOTE_USER" -c 'curl -sS https://webi.sh/shellcheck | sh'
su "$_REMOTE_USER" -c 'curl -sS https://webi.sh/shfmt | sh'
