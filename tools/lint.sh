#!/bin/bash -e

shopt -s globstar
shfmt -l -w -- **/*.sh
prettier -w --ignore-path=.gitignore .
shellcheck -- **/*.sh
