#!/usr/bin/env -S deno run -A

const mutPath = Deno.args[0];
const templatePath = Deno.args[1];
const argsPath = Deno.args[2];

const args = JSON.parse(await Deno.readTextFile(argsPath));
const template = JSON.parse(await Deno.readTextFile(templatePath));

if (template.options) {
  for (const [name, options] of Object.entries(template.options)) {
    if (name in args || !options.default) {
      continue;
    }

    args[name] = options.default;
  }
}

let json = await Deno.readTextFile(mutPath);
for (const [name, value] of Object.entries(args)) {
  const varText = `\${templateOption:${name}}`;
  json = json.replaceAll(varText, value);
}
await Deno.writeTextFile(mutPath, json);
