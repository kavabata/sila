<?php
function loadEnv($path)
{
  if (!file_exists($path)) {
    throw new Exception('File not found: ' . $path);
  }

  $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  foreach ($lines as $line) {
    if (strpos(trim($line), '#') === 0) {
      continue; // Skip comments
    }

    list($name, $value) = explode('=', $line, 2);
    $name = trim($name);
    $value = trim($value);

    if (!array_key_exists($name, $_ENV)) {
      $_ENV[$name] = $value;
    }
  }
}