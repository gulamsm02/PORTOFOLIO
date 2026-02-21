<?php

// 1. Arahkan folder storage ke /tmp (satu-satunya tempat writable di Vercel)
$storagePath = '/tmp/storage';
$dirs = [
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache',
    $storagePath . '/framework/sessions',
    $storagePath . '/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 2. Set environment variable secara runtime untuk memastikan Laravel menggunakannya
putenv("VIEW_COMPILED_PATH=$storagePath/framework/views");
$_ENV['VIEW_COMPILED_PATH'] = "$storagePath/framework/views";

// 3. Panggil file index asli Laravel
require __DIR__ . '/../public/index.php';