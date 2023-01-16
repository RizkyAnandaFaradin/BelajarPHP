<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';
// Create an instance of the class:
$mpdf =new \Mpdf\Mpdf();
$sepatu = query("SELECT * FROM sepatu ");

// Write some HTML code:
$html = '

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Admin Sepatu</title>
   <link rel="stylesheet" href="css/print.css"> 

</head>
<html>
<body>

<h1>Daftar Mahasiswa</h1>
<table border="1"  cellpadding="10"  cellpadding="10" cellspacing="0"  >

<tr>
   <th>No.</th>
   <th>Gambar</th>
   <th>Merek</th>
   <th>Warna</th>
   <th>Ukuran</th>
</tr>';

 $i = 1; 

foreach ($sepatu as $sep) { 
   $html .= '
<tr>
   <td>'.  $i++  .'</td>
   <td> <img src="gambar/' .$sep["gambar"]. '" width="50"  alt=""></td>
   <td>'.$sep["merek"].'</td>
   <td>'.$sep["warna"].'</td>
   <td>'.$sep["ukuran"].'</td>
</tr>';
}

$html .='
</table>
</body>
</html>
';


$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output('daftar-sepatu.pdf' , \Mpdf\Output\Destination::INLINE);

?>
