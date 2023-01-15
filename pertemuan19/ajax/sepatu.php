<?php 
require '../functions.php';

//memgambil nilai keyword, yang dikirimkan lewat metod get(url), yang merupakan inputan dari keyboard
$keyword = $_GET["keyword"];

   // nilai $keyword yang diambil dari $_GET["keyword"]) dimasukkan ke nama
   // lalu nilai tersebut dimasukkan ke $query
   //LIKE digunakan untuk pencariannya tidak terlalu spesifik, dimana %menenjukkan huruf depan, dan kalo %belakang mencari huruf belakang
$query = "SELECT * FROM sepatu WHERE 
merek LIKE '%$keyword%' OR
warna LIKE '%$keyword%' OR
ukuran LIKE '%$keyword%'
";
$sepatu = query($query);



?>
<!-- !-- border untuk ketebalan, cellpadding untuk ruangan tablenya, cellspacing agar tidak ada putih didalam garisnya  --> 
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


<script src="script.js"></script>
</table>
