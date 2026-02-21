<?php

// Pindahkan folder storage ke /tmp agar bisa ditulisi (Writeable)
foreach (['framework/views', 'framework/cache', 'framework/sessions', 'logs'] as $dir) {
    if (!is_dir('/tmp/storage/' . $dir)) {
        mkdir('/tmp/storage/' . $dir, 0755, true);
    }
}

// Load aplikasi Laravel
require __DIR__ . '/../public/index.php';