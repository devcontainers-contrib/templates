<?php

declare(strict_types=1);

use Michelf\MarkdownExtra;

$baseURL = 'https://github.com/devcontainers-contrib/templates/blob/main/README.md';

$srcDir = realpath("{$_SERVER['DOCUMENT_ROOT']}/../../src");

$readmeText = file_get_contents("{$_SERVER['DOCUMENT_ROOT']}/../../README.md");
$readme = MarkdownExtra::defaultTransform($readmeText);

$ids = array_diff(scandir($srcDir), ['.', '..']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Community devcontainer templates</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>

  <h1>Community devcontainer templates</h1>

  <ul>
    <?php foreach ($ids as $id): ?>
      <li>
        <?="<a href='$id'>$id</a>" ?>
      </li>
    <?php endforeach; ?>
  </ul>

  <p>You can find out more on <a href="https://github.com/devcontainers-contrib/templates#readme">GitHub</a></p>

</body>

</html>
