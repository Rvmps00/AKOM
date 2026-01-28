<?php

// 1. Setup the writable /tmp environment
$tmpStorage = '/tmp/storage';
foreach (['/framework/views', '/framework/sessions', '/framework/cache', '/logs'] as $path) {
    if (!is_dir($tmpStorage . $path)) {
        mkdir($tmpStorage . $path, 0777, true);
    }
}

// 2. Fix for "Target class [view] does not exist"
// This manually registers the view engine if the auto-discovery fails on Vercel
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');

// 3. Create SQLite file if missing
if (!file_exists('/tmp/database.sqlite')) {
    touch('/tmp/database.sqlite');
}

// 4. Suppress Warnings
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// 5. Load Laravel
require __DIR__ . '/../public/index.php';
