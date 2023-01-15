<?php 
function salam($waktu = "Datang", $nama = "Admin"){
	return "Selamat $waktu, $nama!";
}
//untuk parameter default, ketika mengirim salah satu parameter



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Latihan Function</title>
 </head>
 <body>
 <h1> <?=salam("","Tasya"); ?></h1>
 </body>
 </html>