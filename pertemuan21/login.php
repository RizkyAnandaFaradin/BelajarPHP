<?php
//menjalankan session karena ingin pakai session
 session_start();
 
//mengambil data dari functions.php
require 'functions.php';
 
 if (isset($_COOKIE["id"]) && isset($_COOKIE["key"] )) {
   //mengambil nilai $_COOKIE["ID"], disimpan ke $id
  $id = $_COOKIE["id"];
  $key = $_COOKIE["key"];

  //mencari username ditabel users, dimana idnya sama dengan id dari cookie
   $result = mysqli_query($conn, "SELECT username FROM users WHERE 
   id = '$id'");

   //mengambil data dari $result, dijadikan array assoc
   //$row akan menghasilkan nilai array yaitu $row = ["id"=>idnya, "username"=>usernamenya, "password"=>passswordnya]
      $row = mysqli_fetch_assoc($result);

      //cek $key (ini username yang sudah di hash) apakah sama dengan $username dari database yang juga sudah dihash
  if ($key===hash('sha256', $row["username"])) {

   //jika sama, maka $_SESSION["login"] = true;
   $_SESSION["login"] = true;
  }
 }

 //jika sudah login, maka dipaksa pindah ke halaman index. 
if (isset($_SESSION["login"])) {
   header('location: index.php');

}


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

          //jika tombol remember me ditekan, maka
          if (isset($_POST["remember"])) {
            //menambahkan variabel login isinya true, dan disimpan di $_COOKIE
            setcookie('id', $row["id"], time()+60);
            setcookie('key', hash('sha256',$row["username"]), time()+60);

       
           }
              
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
      .coba{
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
         <label class="coba" for="username">Username :</label>
         <input type="text" name="username" id="username">
      </li>
   
   
      <li>
         <label class="coba" for="password">Password :</label>
         <input type="password" name="password" id="password">
      </li>

      <li>
         <input type="checkbox" name="remember" id="remember">
         <label  for="remember">Remember Me</label>

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