<?php
$keterangan =$_POST['keterangan'];

// 1. Nama File
$nama_ft = $_FILES['foto']['name'];
echo "Nama foto : $nama_ft <br>";

// 2. tipe file
$type_foto = $_FILES['foto']['type'];
echo "type File : $type_foto <br>";

// 3. ukrn file
$uk_foto = $_FILES['foto']['size'];
echo "Ukuran File : $uk_foto <br>";

// 4. temporary file
$tmpe_foto = $_FILES['foto']['tmp_name'];
echo "temporary file : $tmpe_foto <br>";

// 5. jenis eror
$eror_foto = $_FILES['foto']['error'];
echo "Kode Eror : $eror_foto <br>";

echo $keterangan;


//upload 
move_uploaded_file($tmpe_foto, "foto/$nama_ft")
?>

<hr>
<img src="foto/<?=$nama_foto?>" alt="">
<hr>
<a href="index.php">kembali</a>