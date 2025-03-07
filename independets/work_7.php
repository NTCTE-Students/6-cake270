<?php
$filename = 'file_to_delete.txt';

if (file_exists($filename)) {
    unlink($filename);
    echo "Файл '$filename' удален.";
} else {
    echo "Ошибка: Файл '$filename' не существует.";
}
?>
