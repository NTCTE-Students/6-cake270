<?php
$filename = 'example.txt';
$search_word = 'cake';

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    $count = substr_count($content, $search_word);
    echo "Слово '$search_word' встречается $count раз.";
} else {
    echo "Ошибка: Файл '$filename' не существует.";
}
?>
