<?php

//menggunakan reference
function reference(&$angka)
{
   $angka++;
}
$increment = 1;
reference($increment);
echo $increment;
