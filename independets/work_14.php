<?php
$source_dir = 'source_directory';
$backup_dir = 'backup_' . date('Ymd');

if (!is_dir($backup_dir)) {
    mkdir($backup_dir);
}

foreach (scandir($source_dir) as $file) {
    if ($file !== '.' && $file !== '..') {
        copy("$source_dir/$file", "$backup_dir/$file");
    }
}
?>
