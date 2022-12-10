#!/bin/bash
cd $(dirname "$0")
source test-utils.sh

# Template specific tests
check "terraform version" terraform version

# Report result
reportResults