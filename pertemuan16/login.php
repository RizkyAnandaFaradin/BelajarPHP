<?php
//menjalankan session karena ingin pakai session
 session_start();

 //jika sudah login, maka dipaksa pindah ke halaman index. 
if (isset($_SESSION["login"])) {
   header('location: index.php');

}

//mengambil data dari functions.php
require 'functions.php';

//jika tombol login ditekan
if (isset($_POST['login'])) {

   //maka $password akan menampung nilai dari input yang bernama password
   $password = $_POST['password'];
   $username = $_POST['username'];

   $result = mysqli_query($conn, "SELECT * FROM users WHERE 
   username = '$username'");

   //cek password
   //jika ada username pada tabel yang nilainya sama dengan inputan dari $_post username akan bernilai 1, karena hanya ada 1 username pada tabel tersebut. 
  if (mysqli_num_rows($result)===1) {

   //$row akan menghasilkan nilai array yaitu $row = ["id"=>idnya, "username"=>usernamenya, "password"=>passswordnya]
   $row = mysqli_fetch_assoc($result);
   

   //password_verify untuk mendecrypte password, dimana ada dua parameter, yaitu $nama tabel,  dan tabel password yang isinya sama dengan $password
   if(password_verify($password, $row["password"])){

         //membuat var session bernama login, dnegan nilai true, dimana nilai ini akan dikirimkan , ketika kita berhasil login
          $_SESSION["login"] = true;
           header('Location: index.php');
           exit;
     }
  }
  $error=true;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Login</title>
   <style>
      label{
         display: block;
      }
   </style>
</head>
<body>
   <h1>Halaman Login</h1>
<?php 
//jika password salah atau username salah, maka akan menampilkan dibawah ini
if (isset($error)) : ?>
   <p style="color:red; font-style: italic;">username / password salah </p>
<?php  endif; ?>
   <form action="" method="POST">
      

   <ul>
      <li>
         <label for="username">Username :</label>
         <input type="text" name="username" id="username">
      </li>
   
   
      <li>
         <label for="password">Password :</label>
         <input type="password" name="password" id="password">
      </li>

      
      <li>
         <input type="submit" name="login">
      </li>

      <li>
         <a href="registrasi.php">Belum Punya Account?</a>
      </li>   
   
   </ul>
   </form>
</body>
</html>