<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET</title>
</head>
<body>
	
<?php
$_GET =[ 
   [
      'Nama' => 'Sepatu Satu',
      'Warna' => 'Putih',
      'Ukuran' => 39,
      'Merek' => 'Nike',
      'Gambar' => 'sepatu1.jpg',
   ],   [
      'Nama' => 'Sepatu Dua',
      'Warna' => 'Hitam',
      'Ukuran' => 41,
      'Merek' => 'Nike',
      'Gambar' => 'sepatu2.jpg',
   ],   [
      'Nama' => 'Sepatu Tiga',
      'Warna' => 'Abu',
      'Ukuran' => 40,
      'Merek' => 'Nike',
      'Gambar' => 'sepatu3.jpg',
   ],   [
      'Nama' => 'Sepatu Empat',
      'Warna' => 'Biru',
      'Ukuran' => 39,
      'Merek' => 'Nike',
      'Gambar' => 'sepatu4.jpg',
   ],   [
      'Nama' => 'Sepatu Lima',
      'Warna' => 'Putih',
      'Ukuran' => 43,
      'Merek' => 'Nike',
      'Gambar' => 'sepatu5.jpg',
   ],
  
];
?>

<?php foreach ($_GET as $mhs) { ?>
	<ul>
				<li>
					<a href="baru1.php">  <?php echo $mhs['Nama']  ?> </a>
				</li>
	</ul>


	<?php }  ?>


</body>
</html>