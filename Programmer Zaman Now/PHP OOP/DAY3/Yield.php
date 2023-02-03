<?php
// function getGenap(int $max): Iterator
// {
//    $array = [];
//    for ($i = 0; $i <= $max; $i++) {
//       if ($i % 2 == 0) {
//          $array[] = $i;
//       }
//    }
//    return new ArrayIterator($array);
// }
// foreach (getGenap(100) as $key => $value) {
//    echo "Index ke :  $key = $value" . PHP_EOL;
// }

function getGenap(int $max): Iterator
{
   for ($i = 0; $i <= $max; $i++) {
      if ($i % 2 == 0) {
         yield $i;
      }
   }
}
foreach (getGenap(100) as $key => $value) {
   echo "Index ke :  $key = $value" . PHP_EOL;
}
