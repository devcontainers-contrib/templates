# Terraform (Basic) (terraform-basic)

Terraform is an open-source tool that provides the ability to build, change, and version infrastructure as code using declarative configuration files with HashiCorp Configuration Language (HCL). This devcontainer template allows you to get going quickly with Terraform

## Options

| Options Id | Description                                                              | Type   | Default Value   |
| ---------- | ------------------------------------------------------------------------ | ------ | --------------- |
| version    | Choose version of terraform                                              | string | latest          |
| tflint     | Choose version of tflint                                                 | string | latest          |
| terragrunt | Choose version of terragrunt                                             | string | latest          |
| tfLog      | Enables detailed logs to appear on stderr which is useful for debugging. | string | info            |
| tfLogPath  | This specifies where the log should persist its output to.               | string | ./terraform.log |

---

_Note: This file was auto-generated from the [devcontainer-template.json](https://github.com/devcontainers-contrib/templates/blob/main/src/terraform-basic/devcontainer-template.json). Add additional notes to a `NOTES.md`._
