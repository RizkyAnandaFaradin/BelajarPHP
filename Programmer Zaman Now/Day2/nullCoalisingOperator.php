<?php
$data = [];

if (isset($data['action'])) {
   $action1 = $data['action'];
} else {
   $action1 = 'Nothing';
}
echo $action1 . PHP_EOL;

//bisa diganti seperti ini
$action = $data['action'] ?? 'nothing';
echo $action;
