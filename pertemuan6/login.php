<?php 
//cek apakah tombol submit sudah ditekan atau belum

if (isset($_POST['submit'])) {

//cek username dan passwrod
	if($_POST["username"] == "admin" && $_POST["password"]== "123"){
		//cek jika benar, redirect ke halaman admin
		header("Location: admin.php ");
		exit;
	}else {
		//jika salah tampilkan kesahalan
		$error =true;
	}
}

//jika salah,, tampilan pesan kesahalan




 ?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
</head>
<body>
<h1>selamat datang Admin</h1>
<?php if (isset($error)) :?>
<p style="color: red; font-style: italic;">username atau password salah!</p>
<?php endif ?>
<form action="" method="post">
	<ul>
		<li><label for="username">username :</label>
			<input type="text" name="username" id="username">
		</li>

		<li><label for="password">password :</label>
			<input type="password" name="password" id="passwprd">
		</li>
		<br>
		<button type="submit" name="submit">LOGIN</button>
	</ul>	
</form>
</body>
</html>