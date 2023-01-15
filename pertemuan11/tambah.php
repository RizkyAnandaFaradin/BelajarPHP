<?php 
require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "phpsepatu"); 


if (isset($_POST['submit'])) {
   if (tambah($_POST)>0) {
      echo "
      <script>
      alert('data berhasil ditambahkan');
      document.location.href = 'index.php';
      </script> " ;
   } else {
      echo "
      <script> 
      alert('data gagal ditambahkan');
      document.location.href = 'tambah.php';
      </script>
      ";
  
   }
            }




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah Data Sepatu</title>
</head>
<body>
   <h1>Tambah Data Sepatu</h1>

   <form action=""  method='POST' >
   <ul>
      <li>
         <label for="merek">Merek : </label>
         <br>
         <input type="text" name="merek" id="merek" required>
      </li>
      
      <li>
         <label for="warna">Warna : </label>
         <br>
         <input type="text" name="warna" id="warna">
      </li>
      
      <li>
         <label for="ukuran">Ukuran : </label>
         <br>
         <input type="text" name="ukuran" id="ukuran">
      </li>

      
      <li>
         <label for="gambar">Gambar : </label>
         <br>
         <input type="text" name="gambar" id="gambar">
      </li>
      
      <li>
         <button type="submit" name="submit" >Tambah Data</button>
      </li>
   </ul>
   </form>
   
</body>
</html>