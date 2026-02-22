<?php

// Paksa Laravel menggunakan folder /tmp untuk cache
$tmpDir = '/tmp/storage/framework';
foreach (['/views', '/cache', '/sessions'] as $path) {
    if (!is_dir($tmpDir . $path)) {
        mkdir($tmpDir . $path, 0755, true);
    }
}

putenv("VIEW_COMPILED_PATH=$tmpDir/views");
putenv("APP_CONFIG_CACHE=$tmpDir/cache/config.php");

// Panggil index asli
require __DIR__ . '/../public/index.php';