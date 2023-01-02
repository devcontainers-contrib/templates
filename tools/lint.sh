#!/bin/bash -e

shopt -s globstar
shfmt -l -w -- **/*.sh
shellcheck -- **/*.sh
