<?php 
//mengkoneksikan database
$conn = mysqli_connect("localhost", "root", "", "phpsepatu"); 

function query($query){
   //untuk mengacu pada $conn yang ada di atas
   global $conn;
   //$result akan mengambil data dari koneksi database ($connn), dan isi dari database tersebut ($query)
   $result = mysqli_query($conn, $query);   
   //$rows akan menampung nilai dari $result
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}

function tambah($data)
{
global $conn;
//htmlspecialchars untuk menghalangi input yang tidak sesuai atau memasukkan char yang aneh
$merek = htmlspecialchars($data['merek']);
$warna = htmlspecialchars($data['warna']); 
$gambar = htmlspecialchars($data['gambar']); 
$ukuran = htmlspecialchars($data['ukuran']); 

$query = "INSERT INTO sepatu 
            VALUES
            ('', '$merek', '$warna', '$ukuran', '$gambar')

               ";
            mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

function hapus($id){
   global $conn;
   //untuk menghapus rows, dimana mengacu pada idnya
   mysqli_query($conn, "DELETE FROM sepatu WHERE id = $id");
   

}



?>