<?php

$tmpDir = '/tmp/storage/framework';
foreach (['/views', '/cache', '/sessions'] as $path) {
    if (!is_dir($tmpDir . $path)) {
        mkdir($tmpDir . $path, 0755, true);
    }
}

// FORCE OVERRIDE
putenv("SESSION_DRIVER=cookie");
putenv("LOG_CHANNEL=stderr");
putenv("DB_CONNECTION=sqlite");
putenv("DB_DATABASE=:memory:");
putenv("VIEW_COMPILED_PATH=$tmpDir/views");

// GUNAKAN "/" AGAR RELATIF KE FOLDER PUBLIC
putenv("ASSET_URL=/"); 
putenv("APP_URL=https://portofolio-a453vj7s0-gulam-syahrul-muharoms-projects.vercel.app");

require __DIR__ . '/../public/index.php';