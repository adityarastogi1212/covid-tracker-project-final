<?php
$data= file_get_contents('https://api.covid19api.com/summary');

$corona= json_decode($data);

echo "<pre>";
print_r($corona);
?>