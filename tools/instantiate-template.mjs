#!/usr/bin/env node

import * as fs from "fs/promises";

const mutPath = process.argv[2];
const templatePath = process.argv[3];
const argsPath = process.argv[4];

const args = JSON.parse(await fs.readFile(argsPath, "utf8").catch(() => "{}"));
const template = JSON.parse(await fs.readFile(templatePath, "utf8"));

if (template.options) {
  for (const [name, options] of Object.entries(template.options)) {
    if (name in args || !options.default) {
      continue;
    }

    args[name] = options.default;
  }
}

let json = await fs.readFile(mutPath, "utf8");
for (const [name, value] of Object.entries(args)) {
  const varText = `\${templateOption:${name}}`;
  json = json.replace(new RegExp(varText, "g"), value);
}
await fs.writeFile(mutPath, json);
