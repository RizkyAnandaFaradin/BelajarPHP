<?php

//Array associative
//sama seperti numerik, hanya saja keynya adalah string yang kita buat sendiri

$mahasiswa = [
	[
		"nama" => "Tasya Giani",
		"nrp" => "0403032032",
		"email" => "Tasyapunyananda@gmai.c",
		"jurusan" => "Sistem informasi",
		"gambar" => "logo.png"
	],
	[
		"nama" => "Tasya Giani cantik",
		"nrp" => "043123122",
		"email" => "Tasyapunyaaku@gmai.c",
		"jurusan" => "Sistem informasi <3",
		"gambar" => "tasyaaa.png"
	]
];




?>





<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="">

	</style>
</head>

<body>

	<h1>daftarar</h1>
	<?php foreach ($mahasiswa as $a) : ?>
		<ul>

			<img src="gmbr/<?= $a["gambar"]; ?>">

			<li>Nama: <?= $a["nama"]; ?></li>
			<li>Nama: <?= $a["nrp"];  ?></li>
			<li>Nama: <?= $a["email"];  ?></li>
			<li>Nama: <?= $a["jurusan"]; ?></li>


		</ul>
	<?php endforeach; ?>
</body>

</html>