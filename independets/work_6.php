<?php
$source_file = 'check.txt';
$destination_file = 'meow.txt';

if (file_exists($source_file)) {
    if (!file_exists($destination_file)) {
        copy($source_file, $destination_file);
        echo "Файл скопирован.";
    } else {
        echo "Предупреждение: Файл '$destination_file' уже существует.";
    }
} else {
    echo "Ошибка: Файл '$source_file' не существует.";
}
?>
