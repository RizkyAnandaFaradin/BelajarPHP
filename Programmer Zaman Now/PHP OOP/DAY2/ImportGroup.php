<?php

require_once '../properties/Namespace.php';

use Data\One\{Conflict, Dummy, Sample};

$Conflict1 = new Conflict();
$Dummy1 = new Dummy();
$Sample1 = new Sample();

$Conflict1->Info();
$Dummy1->Info();
$Sample1->Info();
