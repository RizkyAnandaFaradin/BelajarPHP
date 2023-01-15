<?php
require 'functions.php';
if (isset($_POST['login'])) {
   $password = $_POST['password'];
   $username = $_POST['username'];

   $result = mysqli_query($conn, "SELECT * FROM users WHERE 
   username = '$username'");

   var_dump($result); die;
   //cek password
   //mysqli_num_rows, untuk menghitung ada berapa baris yang dikembalikan dari fungsi select
  if (mysqli_num_rows($result)===1) {
   $row = mysqli_fetch_assoc($result);


   //password_verify untuk mendecrypte password, dimana ada dua parameter, yaitu $nama tabel,  dan tabel password yang isinya sama dengan $password
   if(password_verify($password, $row["password"])){
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
   
   
   </ul>
   </form>
</body>
</html>