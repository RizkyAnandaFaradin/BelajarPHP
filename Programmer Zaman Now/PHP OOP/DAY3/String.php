<?php

require "../properties/toString.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Nanda";
$student1->value = 100;

$stringg = (string) $student1;
echo $stringg;
//atau juga bisa 
echo $student1;
