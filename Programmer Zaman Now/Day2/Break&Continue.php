<?php
// $counter = 1;
// while (true) {
//    echo "Hello Break :   $counter " . PHP_EOL;
//    $counter++;
//    if ($counter > 3) {
//       break;
//    }
// }

//Membuat program hanya bilangan ganjil
for ($counter = 0; $counter < 10; $counter++) {
   if ($counter % 2 == 0) {
      continue;
   }
   echo "Ini adalah bilangan ganjil $counter " . PHP_EOL;
}
