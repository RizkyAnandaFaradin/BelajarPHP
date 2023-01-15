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
$ukuran = htmlspecialchars($data['ukuran']); 

$gambar = upload();
if (!$gambar) {
   return false;
}

$query = "INSERT INTO sepatu 
            VALUES
            ('', '$merek', '$warna', '$ukuran', '$gambar')

               ";
            mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}

function upload()
{
   //mengambil nilai di $_files di array gambar yang didalamnya ada name, dan disimpan ke var namafile
 $namaFile = $_FILES['gambar']['name'];
 $ukuranFile = $_FILES['gambar']['size'];   
 $error = $_FILES['gambar']['error'];   
 $tmpName = $_FILES['gambar']['tmp_name'];   

 //mengecek, jika gambar tidak ada yang diupload
 if ($error===4) {

   //ketika tidak ada, maka jalankan script alert
   echo "<script> 
   alert('Upload gambar terlebih dahulu!');
   </script>";
   //lalu berhentikan semua fungsi
   return false;
 }

 //membuat array extension gambar
 $validExtension = ['jpg', 'jpeg', 'png'];

 //ini akan memecah nama dari $namafile dan akan disimpan menjjadi array
 //untuk kasus ini, akan dipecah menjadi $extension = ['namafilenya' , 'extensinya apa']
 $extension = explode('.', $namaFile);

 //end ini akan mengambil nilai array yang terakhir dari $extension, dan disimpan kembali ke $extension
 //strtolower, ini akan memaksa semua nama dari validextension akan menjadi huruf kecil
 $extension = strtolower(end($extension));

 //mengecek extension, dimana apakah adah string yang nilainya sama seperti di validExtension, in_array menghasilkan nilai true dan false
 //tanda ! di artinya sama dengan if(in_array == false)
 //jadi, jika tida ada extensi file yang sama, maka 
 if (!in_array($extension, $validExtension)) {
      //ketika tidak ada, maka jalankan script alert
   echo "<script> 
   alert('Yang anda upload bukanlah gambar!!');
   </script>";
   //lalu berhentikan semua fungsi
   return false;
 }

//mengecek file gambar terlalu besar 
//jika $ukuran file lebih dari 1mb, maka
if ($ukuranFile > 1000000) {
   echo "<script> 
   alert('Ukuran gambar terlalu besar!!');
   </script>";
   //lalu berhentikan semua fungsi
   return false;
}


//lolos pengecekan file, gambar siap diupload

//generate nama gambar baru, uniqid akan mengenerate string baru random
 $namaFile = uniqid();

//  menambahkan . pada $namaFile
 $namaFile .= ".";

//  menambahkan extension pada $namaFile
 $namaFile .= $extension;

 //sehingga nama file menjadi randomstring."extension"

//INI UNTUK MEMINDAHKAN FILENYA
move_uploaded_file($tmpName, 'gambar/' . $namaFile);

//mengembalikan $namafile 
return $namaFile;



}



function hapus($id){
   global $conn;
   //untuk menghapus rows, dimana mengacu pada idnya
   
	mysqli_query($conn, "DELETE FROM sepatu WHERE id = $id");


}

function ubah($data)
{
global $conn;
//htmlspecialchars untuk menghalangi input yang tidak sesuai atau memasukkan char yang aneh
$id = $data['id'];
$merek = htmlspecialchars($data['merek']);
$warna = htmlspecialchars($data['warna']); 
$ukuran = htmlspecialchars($data['ukuran']);
$gambarLama = $data['gambarlama'];


//jika $_FILES['gambar']['error']===4 pada halaman ubah tidak upload, maka gunakan $gambar = gambarLama
if ($_FILES['gambar']['error']===4) {
   $gambar = $gambarLama;
} else {

   //ketika selain itu, maka gunakan gambar yang diupload
   $gambar = upload();
}


$query = "UPDATE sepatu SET 
             id='$id',
            merek='$merek',
            warna='$warna',
            ukuran='$ukuran',
            gambar='$gambar' WHERE id = $id";

            mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}



function cari($keyword)
{ 
   // nilai $keyword yang diambil dari cari($_POST["keyword"]) dimasukkan ke nama
   // lalu nilai tersebut dimasukkan ke $query
   //LIKE digunakan untuk pencariannya tidak terlalu spesifik, dimana %menenjukkan huruf depan, dan kalo %belakang mencari huruf belakang
$query = "SELECT * FROM sepatu WHERE 
merek LIKE '%$keyword%' OR
warna LIKE '%$keyword%' OR
ukuran LIKE '%$keyword%'
";

   // function query akan menampung nilai dari $query, yang akan dikembalikan 
return query($query);

}


?>