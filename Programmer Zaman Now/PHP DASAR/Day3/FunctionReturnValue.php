<?php
function Summ($int1, $int2): string
{
   $total = $int1 + $int2;
   return $total;
}

$result = Summ(1, 2);
var_dump($result);


function getFinalValue(int $value): String
{
   if ($value >= 80) {
      return 'A';
   } else if ($value >= 70) {
      return 'B';
   } else if ($value >= 60) {
      return 'C';
   } else if ($value >= 50) {
      return 'D';
   } else if ($value >= 40) {
      return 'E';
   }
}

echo getFinalValue((70));
