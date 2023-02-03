<?php

require_once('../properties/toString.php');

$student1 = new Student();
$student1->id = "1";
$student1->name = "Nanda";
$student1->value = 100;
$student1(1, 2, 3);
