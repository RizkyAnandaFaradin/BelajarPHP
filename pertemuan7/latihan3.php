

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>post</title>
</head>
<body>

<?php if(isset($_POST["submit"])) :?> <!-- apakah tombol submit sudah dipencet, ketika sudah tampilkan ini -->
	<h1>Halo, selamat datang <?= $_POST["nama"]; ?></h1>
	<?php endif; ?>

	<form action="" method="post" >
		Masukkan nama :
		<input type="text" name="nama">
		<br>
		<button type="submit" name="submit">KIRIM!</button>
	</form>

</body>
</html>