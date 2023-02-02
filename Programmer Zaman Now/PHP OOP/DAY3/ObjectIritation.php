<?php
class Data
{
   var string $first = "First";
   var string $Second = "Second";
   var string $Third = "Third";
}
$data = new Data();
foreach ($data as $key => $value) {
   echo "ini " . $key . " dan " . $value . PHP_EOL;
}
