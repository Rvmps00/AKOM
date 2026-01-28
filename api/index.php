<?php

// 1. Create the necessary folder structure in the writable /tmp directory
$tmpStorage = '/tmp/storage/framework';
foreach (['/sessions', '/views', '/cache'] as $path) {
    if (!is_dir($tmpStorage . $path)) {
        mkdir($tmpStorage . $path, 0777, true);
    }
}

// 2. Suppress PHP 8.5 deprecation warnings
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// 3. Point Laravel to the new storage paths
putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');

// 4. Create SQLite file if it doesn't exist
if (!file_exists('/tmp/database.sqlite')) {
    touch('/tmp/database.sqlite');
}

// 5. Load the app
require __DIR__ . '/../public/index.php';
