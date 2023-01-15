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


$jumlahDataPerhalaman = 2;

//ini akan menampilkan jumlah baris yang ada di dalam tabel sepatu
$jumlahData = count(query("SELECT * FROM sepatu"));

//ini akan menentukan jumlahHalaman yang mengacu pada jumlahdata/jumlahdataPerhalaman
//ceil akan membulatkan kebawah hasil pembagian tersebut
$jumlahHalaman = ceil(($jumlahData/$jumlahDataPerhalaman));
//[ //cek, apakah diurl pada halaman, jika ada, maka
// if (isset($_GET["halaman"])) {

//    //ambil halaman diurl, dimasukkan ke $halamanaktif
//    $halamanAktif = $_GET["halaman"];
// } else {
   
//    //jika tidak ada, maka halaman aktif di 1
//    $halamanAktif = 1;
// } ]

//diatas menjadi dibawah, kita pakai operator ternary
//jika terdapat value halaman di url, maka masukkan ke var halamanaktif
//jika tidak ada, masukkan value 1, di halaman aktif
$halamanAktif = (isset($_GET["halaman"]) ? $_GET["halaman"] : 1);


//ini rumus, untuk mengetahui index ketika jumlah data perhalaaman ada dua
$awalData = (($halamanAktif-1)*$jumlahDataPerhalaman);

//ini untuk menentukan data yang ditampilkan, dimana parametter pertama sebagai indexawal yang akan ditampilkan, dan kedua adalah jumlah baris yang akan ditampilkan 
$sepatu = query("SELECT * FROM sepatu LIMIT $awalData, $jumlahDataPerhalaman ");

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
   
   <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Pencarian.." autocomplete="off">
   <button type="submit" name="cari">Cari</button>
   <br>

   <!-- jika halamanaktifnya lebih dari satu atau tidak 0, maka munculkan tanda < -->
   <?php if ($halamanAktif>1) { ?>

<!-- ini akan mengurangi jumlah halamannya, setiap diklik -->
<a href="?halaman= 
<?=$halamanAktif-1?>">&lt;

   <?php } ?> 
</a>
      


   <!-- ini akan looping sesuai dengan jumlahhalaman yang mengacu pada jumlah data yang ditampilkan -->
   <?php  for ($i=1; $i <=$jumlahHalaman ; $i++) { 

      //jika nilai $i sama dnegna halaman aktif maka akan ada style pada link, sisanya akan tidak ada style
      if ($i==$halamanAktif) { ?>         
      <a  style = "font-weight-bold; color:red" 
            href="?halaman= <?= $i; ?>">  <?= $i?>  </a>
      <?php } 
      
      else{ ?>
            <a href="?halaman= <?= $i; ?>">  <?= $i?></a>
<?php }
   }?>

       <!-- jika halamanaktifnya kurang jumlahhalaman maka hilangkan tanda > -->
   <?php if ($halamanAktif<$jumlahHalaman) { ?>

<!-- ini akan menambahkan jumlah halamannya, setiap diklik -->
<a href="?halaman= 
<?=$halamanAktif+1?>">&gt;

   <?php } ?> 
</a>
       

</form>

 


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

</table>
</body>
</html>