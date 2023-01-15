<?php 
// koneksi ke database, paraneternya "namahost", "root", "passwprdnya(isikosoong)", "namadatabase"
$conn = mysqli_connect("localhost", "root", "", "phpsepatu"); 

//ambil data dari tabel sepatu / query data sepatu, sintak sql ditulis besar
$result = mysqli_query($conn, "SELECT * FROM sepatu");

//untuk melihat apakah sudah terhubung apa tidak
if(!$result){
   echo mysqli_error($conn);
}

//mengambil data sepatu dari object $result, bisa dengan cara: 
// 1. mysqli_fetch_row() ini mengembalikan array numerik
// 2. mysqli_fetch_assoc() mengembalikan array assosiative
// 3. mysqli_fetch_array() mengembalikan array asosiatif atau numerik tapi jadi double memorinya
// 4. mysqli_fetch_object() ini mengembalikan object, dengan cara $sepatu->warna
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
 while ($sepatu = mysqli_fetch_assoc($result)) { ?>
<tr>

   <td>
      <?php echo($sepatu["id"])  ?>
   </td>
   <td>
      <a href="">ubah</a> | 
      <a href="">hapus</a>

   </td>
   
   <td>
   <img src="gambar/<?= ($sepatu["gambar"])?>" width="50"  alt="">    
</td>
   
   <td>
      <?php echo($sepatu["merek"])  ?>
   </td>

   <td>
      <?php echo($sepatu["warna"])  ?>
   </td>
   
   <td>
      <?php echo($sepatu["ukuran"])  ?>
   </td>
</tr>
<?php  } ?>

</table>
</body>
</html>