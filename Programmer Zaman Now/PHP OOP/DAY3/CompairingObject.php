<?php
require "../properties/ObjectCloning.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Nanda";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Nanda";
$student2->value = 100;


var_dump($student2 == $student1);
var_dump($student2 === $student1);
