<?php

// 1. Matikan error reporting yang bisa mengganggu output header
ini_set('display_errors', 0);

// 2. Setup folder storage di memori /tmp (Satu-satunya tempat yang bisa ditulis di Vercel)
$storagePath = '/tmp/storage';
$dirs = [
    "$storagePath/framework/views",
    "$storagePath/framework/cache",
    "$storagePath/framework/sessions",
    "$storagePath/logs",
    "/tmp/bootstrap/cache" // Tambahan untuk Laravel 12
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 3. Environment Variables Penting
putenv("APP_STORAGE=$storagePath");
putenv("VIEW_COMPILED_PATH=$storagePath/framework/views");
putenv("STRIPE_CACHE_PATH=$storagePath/framework/cache");

// 4. Pastikan bootstrap cache Laravel 12 lari ke /tmp
putenv("BOOTSTRAP_CACHE_PATH=/tmp/bootstrap/cache");

// 5. Panggil file index Laravel asli
require __DIR__ . '/../public/index.php';