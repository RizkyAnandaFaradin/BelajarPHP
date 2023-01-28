<?php
function VariableFunc()
{
   echo "Halo woi" . PHP_EOL;
}
$name = "VariableFunc";
$name();


function Func(string $name, $filter)
{
   $filtername = $filter($name);
   echo "Hello " . $filtername;
}
Func('Nanda', "strtoupper");
