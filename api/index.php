<?php

// 1. Create the database file in /tmp if it doesn't exist
$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    touch($dbPath);
}

// 2. Suppress PHP 8.5 deprecation warnings
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// 3. Forward to Laravel
require __DIR__ . '/../public/index.php';
