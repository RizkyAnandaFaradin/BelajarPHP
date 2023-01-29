<?php

function Factor($angka)
{
   if ($angka == 1) {
      return 1;
   } else {
      return $angka * Factor($angka - 1);
   }
}
var_dump(Factor(5));
