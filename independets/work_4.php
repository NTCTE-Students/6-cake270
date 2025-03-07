<?php
$filename = 'example.txt';

if (file_exists($filename)) {
    $lines = file($filename);
    echo "Количество строк: " . count($lines);
} else {
    echo "Ошибка: Файл '$filename' не существует.";
}
?>
