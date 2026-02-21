<?php

// 1. Paksa Laravel simpan cache di folder /tmp (karena Vercel itu Read-Only)
$storagePath = '/tmp/storage';
foreach ([
    "$storagePath/framework/views",
    "$storagePath/framework/cache",
    "$storagePath/framework/sessions",
    "$storagePath/logs"
] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// 2. Beritahu Laravel lokasi folder storage yang baru
putenv("APP_STORAGE=$storagePath");
putenv("VIEW_COMPILED_PATH=$storagePath/framework/views");

// 3. PANGGIL LARAVEL ASLI
// Pastikan path ini benar mengarah ke public/index.php
require __DIR__ . '/../public/index.php';