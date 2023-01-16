<?php 

session_start();

//jika tidak ada  $_SSION["LOGIN] atau artinya jika belum login
if (!isset($_SESSION["login"])) {

   //maka paksa ke halaman login. 
   header("location: login.php");
   exit;
}

//kita juga bisa menggunakan include
require 'functions.php';
//ORDER by id ASC atau ascending yaitu mengurutkan data dari id yang terkecil dan DSC atau descending yaitu dari terbesar (terbaruu)
$sepatu = query("SELECT * FROM sepatu ");

// ketika tombol cari dipencet, masukkan nilai dari keyword yang ada di $_post ke function cari dan disimpan di $sepatu 
if ( isset($_POST['cari']) ) {
   $sepatu = cari($_POST['keyword']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Admin Sepatu</title>

   <style>
      .loader{
         width: 23px;
         top: 141px;
         position: absolute;
         display: none;
      }
   </style>
<script src="js/jquery-3.6.3.min.js"></script>

</head>
<body>
<a href="logout.php">logout</a>

<h1>Daftar Sepatu</h1>


<a href="tambah.php">Tambah Data Sepatu</a>
<br><br>
<form action="" method="POST">

   <!-- autofocus untuk mengarahkan pertama kali langsung ke field tersebut -->
   <!-- placeholder untuk menampilkan teks pada field pencarian -->
   <!-- autocomplete = off untuk menghilangkan suggest pada field pencarian -->
      <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Pencarian.." autocomplete="off" id="keyword">
   <button type="submit" name="cari" id="tombol-cari">Cari</button>

   <img src="gambar/loader.gif" class="loader" alt="loader">

</form>
<br>
<div id="container">
<!-- border untuk ketebalan, cellpadding untuk ruangan tablenya, cellspacing agar tidak ada putih didalam garisnya  -->
<table border="1"  cellpadding="10"  cellpadding="10" cellspacing="0"  >

<!-- tr untuk rownya -->
<tr>
   <!-- td untuk collume -->
   <th>No.</th>
   <th>Aksi</th>
   <th>Gambar</th>
   <th>Merek</th>
   <th>Warna</th>
   <th>Ukuran</th>
</tr>

<?php $i = 1;  ?>

<?php foreach ($sepatu as $sep) {  ?>
<tr>
   <td>
      <?php echo $i  ?>
   </td>
   <td>
      <a href="ubah.php?id=<?= ($sep["id"])?>">ubah</a> | 
      <a href="hapus.php?id=<?= ($sep["id"])?>" onclick=" return confirm('yakin?')" >hapus</a>

   </td>   
   <td>
   <img src="gambar/<?= ($sep["gambar"])?>" width="50"  alt="">    
</td>
   
   <td>
      <?php echo($sep["merek"])  ?>
   </td>

   <td>
      <?php echo($sep["warna"])  ?>
   </td>
   
   <td>
      <?php echo($sep["ukuran"])  ?>
   </td>
</tr>

<?php $i++;
} ?>

<script src="js/script.js"></script>
</table>
</div>
</body>
</html>