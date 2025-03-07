<?php
$old_filename = 'example.txt';
$new_filename = 'new_example.txt';
$search_word = 'old_word';
$replace_word = 'new_word';

$content = file_get_contents($old_filename);
$content = str_replace($search_word, $replace_word, $content);
file_put_contents($new_filename, $content);
?>
