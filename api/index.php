<?php
try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo '<pre>';
    echo 'Raw Exception: ' . $e->getMessage() . "\n";
    echo $e->getTraceAsString();
    echo '</pre>';
}
