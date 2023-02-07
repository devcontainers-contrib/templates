<?php
/**
 * This is a router for the devcontainers-contrib/templates website. It routes
 * all requests to /:id to src/[id].php, and all / requests to src/index.php.
 */

declare(strict_types=1);

// TODO(@jcbhmr): Make it so that we don't need to require_once the autoloader
// IDEA: Use php.ini or -d to set the auto_prepend_file to the autoloader
require_once(__DIR__ . '/vendor/autoload.php');

$pathname = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($pathname === '/') {
  require realpath("{$_SERVER['DOCUMENT_ROOT']}/index.php");
} else if (preg_match('/^\/([\w-]+)$/', $pathname, $match)) {
  $id = $match[1];
  require realpath("{$_SERVER['DOCUMENT_ROOT']}/[id].php");
} else {
  http_response_code(404);
  echo '404 Not Found';
}
