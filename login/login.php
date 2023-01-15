<?php 
//cek apakah tombol submit sudah tekan apa blm
if (isset($_POST['submit'])) {
   //cek username dan password
   if ($_POST['username']=='admin' &&$_POST['password'] =='admin') {
      header('Location: admin.php');
      exit;
   } else {
   //jika salah tampilkan kesalahan
   $error = true;
   }  
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
</head>
<body>



   <h1>Login</h1>
   <?php if (isset($error)) { ?>
   <p>Username atau Password Anda Salah</p>
<?php }  ?>
<ul>
<form action="" method='post'>
   <li>
   <label for="username" name='username'>Username </label>
   <br>
   <input type="text" id='username' name='username'>
  </li>
  <li>
   <label for="password" name='password'>Password </label>
   <br>
   <input type="password" id='password' name='password'>
  </li>
  <li>
  <br>
   <button type='submit' name='submit'>Kirim!</button>
  </li>
</form>


</ul>   


</body>
</html>