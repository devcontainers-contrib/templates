# Community devcontainer templates

🥧 Pre-baked [@devcontainers] configurations to get you started

<div align="center">

![](https://i.imgur.com/NSfVKbP.png)

<!-- prettier-ignore -->
[Docs site](https://devcontainers-contrib.github.io/templates/)
| [Chat](https://gitter.im/devcontainers-contrib/community)

</div>

🔧 80% of the configuration you'll ever need \
💻 Ready to go with GitHub Codespaces \
🚀 Quickly get up-and-running with a devcontainer \
🐳 No need to mess with a `Dockerfile`

## Usage

![Codespaces](https://img.shields.io/static/v1?style=for-the-badge&message=Codespaces&color=181717&logo=GitHub&logoColor=FFFFFF&label=)
![Devcontainers](https://img.shields.io/static/v1?style=for-the-badge&message=Devcontainers&color=2496ED&logo=Docker&logoColor=FFFFFF&label=)

After creating a GitHub Codespace (or a devcontainer in VS Code), open the
Command Palette to find the <kbd>Dev Containers: Add Dev Container Configuration
Files...</kbd> command. After you run it, VS Code will guide you through the
creation of a `.devcontainer/devcontainer.json` file!

Make sure you click the <kbd>Show All Definitions...</kbd> option to see our
unofficial templates!

<div align="center">

![](https://i.imgur.com/IO5r8Gf.png)

</div>

## Development

![GitHub.dev](https://img.shields.io/static/v1?style=for-the-badge&message=GitHub.dev&color=007ACC&logo=Visual+Studio+Code&logoColor=FFFFFF&label=)

📢 We want **you** to [contribute]!

Guess what? You don't even need to leave your browser to add a feature template!
Since these `devcontainer-template.json` files are just JSON files, we don't
need a full IDE with a terminal; all we need is a JSON text editor.

<div align="center">

![](https://i.imgur.com/XqMz7pB.png)

</div>

To add a feature, all you need to do is...

1. Fork this repository.
2. Press <kbd>.</kbd> (period) on your keyboard to open GitHub.dev.
3. Make any changes.
4. Commit to your forked repo.
5. Open a Pull Request to this repo.
6. Profit! 🎉

📙 You can find more information in the [contributing guide]

### Docs website

If you want to contribute to the docs website, you'll actually need to spin up a
local development environment. We do offer a preconfigured devcontainer for
GitHub Codespaces or VS Code Dev Containers, but you can use anything that fits
the requirements described in the `devcontainer.json` file.

⚠️ All the `docs/tools/` scripts assume that you're current working directory is
the `docs/` folder, not the root of the repository. It's like a subproject!

[@devcontainers]: https://github.com/devcontainers
[contribute]: CONTRIBUTING.md
[contributing guide]: CONTRIBUTING.md
