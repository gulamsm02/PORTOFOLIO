<?php

$tmpDir = '/tmp/storage/framework';
foreach (['/views', '/cache', '/sessions'] as $path) {
    if (!is_dir($tmpDir . $path)) {
        mkdir($tmpDir . $path, 0755, true);
    }
}

// FORCE OVERRIDE - Ini yang paling penting
putenv("SESSION_DRIVER=cookie");
putenv("LOG_CHANNEL=stderr");
putenv("DB_CONNECTION=sqlite");
putenv("DB_DATABASE=:memory:");
putenv("VIEW_COMPILED_PATH=$tmpDir/views");

require __DIR__ . '/../public/index.php';