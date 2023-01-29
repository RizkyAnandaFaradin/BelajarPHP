<?php
function sumAll(...$values)
{
   $total = 0;
   foreach ($values as $value) {
      $total += $value;
   }
   echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

$ARRAY   = [10, 10, 10, 10];
sumAll(10, 10, 10, 10);
sumAll(...$ARRAY);
