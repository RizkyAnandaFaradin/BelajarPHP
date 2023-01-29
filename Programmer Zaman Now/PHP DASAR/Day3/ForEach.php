<?php
//menggunakan for
for ($i = 0; $i < count($names); $i++) {
   echo "$names[$i] ";
}
echo PHP_EOL;

//menggunakan foreach
$names = ["Rizky", "Ananda", "Faradin"];
foreach ($names as $index => $name) {
   echo "Data ke $index = $name";
}
echo PHP_EOL;

//atau
$namas = [
   'nama' => 'Rizky Ananda Faradin',
   'NIM' => 1903332063,
   'Semester' => 'Sudah Lulus',
];

foreach ($namas as $key => $value) {
   echo "$key = $value" . PHP_EOL;
}
