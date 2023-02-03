<?php
require "../properties/ObjectCloning.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Nanda";
$student1->value = 100;
$student2 = clone $student1;
var_dump($student2);
