<?php

// Arahkan storage ke folder temporary Vercel
putenv('APP_STORAGE=/tmp/storage');

// Panggil file index Laravel yang asli di folder public
require __DIR__ . '/../public/index.php';