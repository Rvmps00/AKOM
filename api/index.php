<?php

// 1. Define paths in the writable /tmp directory
$tmpStorage = '/tmp/storage';
$folders = [
    $tmpStorage . '/framework/sessions',
    $tmpStorage . '/framework/views',
    $tmpStorage . '/framework/cache',
    $tmpStorage . '/logs',
];

// 2. Create the folders if they don't exist
foreach ($folders as $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }
}

// 3. Ensure the SQLite database file exists in /tmp
$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    touch($dbPath);
}

// 4. Suppress PHP 8.5 deprecation warnings
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// 5. Route to the real Laravel index
require __DIR__ . '/../public/index.php';
