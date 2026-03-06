<?php
/**
 * Upgraded Potato — application entry point.
 *
 * Serves a simple HTML response to confirm the application is running.
 */

declare(strict_types=1);

header('Content-Type: text/html; charset=UTF-8');

echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Upgraded Potato</title>
</head>
<body>
  <h1>🥔 Upgraded Potato</h1>
  <p>Application is running.</p>
</body>
</html>';
