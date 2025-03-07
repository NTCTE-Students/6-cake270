<?php
$log_message = "Сообщение.";
$log_filename = "log.txt";

$log_entry = date('Y-m-d H:i:s') . ": " . $log_message . "\n";
file_put_contents($log_filename, $log_entry, FILE_APPEND);
?>
