<?php
$mahasiswa = [[
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
</head>
<body>
	<h1>data mahasiswa</h1>


	<ul>
	<?php foreach ($mahasiswa as $a ):?>

		<li>
			<a href="hal2.php?nama=<?= $a["nama"] ?>&nrp=<?=$a["nrp"]?>?>"><?= $a["nama"];?></a>
	</li>
	
	<?php endforeach;?>

	<ul>
</body>
</html>