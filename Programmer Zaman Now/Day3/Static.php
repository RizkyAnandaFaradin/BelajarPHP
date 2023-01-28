<?php

function FunctionName()
{
   static $angka = 1;
   echo "$angka";
   return $angka++;
}
FunctionName();
FunctionName();
FunctionName();
