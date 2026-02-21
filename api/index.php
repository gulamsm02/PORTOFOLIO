<?php

// Pastikan folder storage ada di /tmp agar tidak error Read-Only
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Panggil index Laravel asli
require __DIR__ . '/../public/index.php';