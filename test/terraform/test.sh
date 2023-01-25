#!/bin/bash -e

cd "$(dirname "$0")"
source test-utils.sh

check "Terraform" terraform version
check "TFLine" tflint --version
check "Terragrunt" terragrunt --version
check "terraform-docs" terraform-docs --version

reportResults
