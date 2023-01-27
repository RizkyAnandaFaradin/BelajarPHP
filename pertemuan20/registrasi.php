<?php


//jika tombol register ditekan
if (isset($_POST['register'])) {
   //jika nilai dari registrasi lebih dari 0, maka user berhasil ditambahkan
   if (registrasi($_POST) > 0) {
      echo "<script>
             alert('User Berhasil diTambahkan');
             </script>";
   } else {
      //tampilkan pesan error
      echo mysqli_error($conn);
   }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
      input {
         display: block;
      }
   </style>
   <title>Halaman Registrasi</title>
</head>

<body>
   <h1>
      Halaman Registrasi
   </h1>
   <form action="" method="POST">
      <ul>
         <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
         </li>


         <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
         </li>


         <li>
            <label for="password2">Konfirmasi Password : </label>
            <input type="password" name="password2" id="password2">
         </li>

         <li>
            <button type="submit" name="register">Registrasi</button>
         </li>

         <li>
            <a href="login.php">Sudah Punya Account? Login</a>
         </li>
      </ul>
   </form>
</body>

</html>