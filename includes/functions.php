<?php
function load_env($path)
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

function build_url($url = '')
{
  global $lang;
  return $lang != 'pl' ? "/{$lang}/{$url}" : "/{$url}";
}

function get_files($dir, $extensions = [])
{
  $path = $_SERVER['DOCUMENT_ROOT'] . $dir;
  $files = [];
  foreach (scandir($path) as $file) {
    $filePath = $path . $file;
    if (is_file($filePath) && in_array(pathinfo($filePath, PATHINFO_EXTENSION), $extensions)) {
      $files[] = [
        'name' => $file,
        'path' => $dir . $file,
        'ext' => pathinfo($filePath, PATHINFO_EXTENSION),
        'date' => filemtime($filePath)
      ];
    }
  }
  usort($files, function ($a, $b) {
    return $b['date'] - $a['date'];
  });
  return $files;
}


