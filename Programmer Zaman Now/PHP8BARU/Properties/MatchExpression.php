<?php
//TANPA MATCH EXPRESSION
$value = "A";
$result = "";
switch ($value) {
   case "A":
   case "B":
   case "C":
      $result = "Anda  Lulus";
      break;
   case "D":
      $result = "Anda Tidak Lulus";
      break;
   default:
      $result = "Ini bukan nilai";
}

//DEMGAN MATCH EXPRESSION 
$value = "A";
$result = match ($value) {
   "A", "B", "C" => "Anda Luluss",
   "D" => "Anda Tidak Luluss",
   default => "Ini bukan nilaii"
};

//DENGAN MATCH EXPRESSION KITA BISA MELAKUKAN PENGKODISIAN
$value = 50;
$result = match (true) {
   $value > 50 => "Andaa Lulus",
   $value <= 50 => "Anda Tidakk Lulus",
   default => "Ini bukann nilai",
};
