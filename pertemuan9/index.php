<?php 
require 'functions.php';

$sepatu = query("SELECT * FROM sepatu");
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Admin Sepatu</title>
</head>
<body>

<h1>Daftar Sepatu</h1>

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

<?php
$i = 1;
foreach ($sepatu as $sep) { 
   ?>

<tr>

   <td>
      <?php echo($i)  ?>
   </td>
   <td>
      <a href="">ubah</a> | 
      <a href="">hapus</a>

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
<?php  
$i++;
} ?>

</table>
</body>
</html>