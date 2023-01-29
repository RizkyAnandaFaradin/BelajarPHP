<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$data2 = array_map(fn ($data) => $data * 2, $data);
echo implode('-', $data2);
