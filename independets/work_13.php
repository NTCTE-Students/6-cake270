<?php
$filename = 'data.json';

// Чтение JSON файла
$data = json_decode(file_get_contents($filename), true);

// Добавление нового элемента
$data[] = ["new_key" => "new_value"];

// Запись обратно в JSON файл
file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
?>
