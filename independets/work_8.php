<?php
$old_name = 'old_file.txt';
$new_name = 'new_file.txt';

if (file_exists($old_name)) {
    if (!file_exists($new_name)) {
        rename($old_name, $new_name);
        echo "Файл переименован в '$new_name'.";
    } else {
        echo "Ошибка: Файл '$new_name' уже существует.";
    }
} else {
    echo "Ошибка: Файл '$old_name' не существует.";
}
?>
