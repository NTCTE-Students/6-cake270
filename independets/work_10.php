<?php
$data = [
    ['Name', 'Age'],
    ['Alice', 30],
    ['Bob', 25]
];
$filename = 'output.csv';

if (($handle = fopen($filename, 'w')) !== FALSE) {
    foreach ($data as $row) {
        fputcsv($handle, $row);
    }
    fclose($handle);
}
?>
