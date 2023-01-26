<?php

declare(strict_types=1);

use Michelf\MarkdownExtra;

$srcDir = realpath("{$_SERVER['DOCUMENT_ROOT']}/../../src");

$devcontainerTemplateText = file_get_contents("$srcDir/$id/devcontainer-template.json");
$devcontainerTemplate = json_decode($devcontainerTemplateText, true);

$readmeText = file_get_contents("$srcDir/$id/README.md");
$readme = MarkdownExtra::defaultTransform($readmeText);

extract($devcontainerTemplate);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Document</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

</head>

<body>

  <header>
    <h1>
      <?= $name ?>
    </h1>
    <p>
      <?= $description ?>
    </p>
  </header>

  <?php if ($options): ?>
    <table id="options">
      <thead>
        <tr>
          <th>Option</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($options as $optionName => $option): ?>
          <tr>
            <td>
              <code><?= $optionName ?></code>
            </td>
            <td>
              <?= $option['description'] ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>

  <?php if ($readme): ?>
    <?= $readme ?>
  <?php endif; ?>

</body>

</html>
