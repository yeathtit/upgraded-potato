<?php

declare(strict_types=1);

/**
 * Entry point for the upgraded-potato web application.
 *
 * Serves the static index.html page and provides a minimal
 * health-check endpoint used by the OpenShift liveness probe.
 */

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path       = parse_url($requestUri, PHP_URL_PATH);

if ($path === '/health') {
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode(['status' => 'ok'], JSON_THROW_ON_ERROR);
    exit;
}

$indexFile = __DIR__ . '/index.html';

if (!is_file($indexFile)) {
    http_response_code(503);
    echo 'index.html not found.';
    exit;
}

header('Content-Type: text/html; charset=UTF-8');
readfile($indexFile);
