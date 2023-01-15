<?php 
//cek apakah data tidak ada data di $get

if(!isset($_GET["nama"]) ||
	!isset($_GET["nrp"])
 ) {

	//redirect untuk memaksa user kembali ke halaman 1 

	header("Location: getpost.php");
	exit;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<ul>
		<li><?php $_GET["gambar"]?></li>
		<li><?= $_GET["nama"];?></li>
		<li><?= $_GET["nrp"];?></li>
		<li><?= $_GET["email"];?></li>
		<li><?= $_GET["jurusan"];?></li>

	</ul>

</body>
</html>