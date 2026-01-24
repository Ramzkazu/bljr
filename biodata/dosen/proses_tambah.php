<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $rumpun = $_POST['rumpun'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $nama_ft = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];

    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO dosen (nidn,nama,rumpun,email,no_hp,foto) 
    VALUES ('$nidn','$nama','$rumpun','$email','$no_hp','$nama_ft')";

    $tambah = mysqli_query($koneksi,$query);

    move_uploaded_file($tmp_foto, "../foto_dosen/$nama_ft");

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>