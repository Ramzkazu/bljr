<?php

    #Mengkoneksikan PHP ke MySql

    include("../koneksi.php");
    
    #ambil value dari form
    $nama = $_POST["nama"];
    $nisn = $_POST["nisn"];
    $tp_lahir = $_POST["tp_lahir"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];
    $jk = $_POST["jk"];
    $jur = $_POST["jur"];
    $nama_ft = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];

    #proses tambah data
    $query = "INSERT INTO biodata (nama,nisn,tp_lahir,tgl_lahir,alamat,email,jk,jurusans_id,foto)
    VALUES ('$nama','$nisn','$tp_lahir','$tgl_lahir','$alamat','$email','$jk','$jur','$nama_ft')";
    
    $tambah = mysqli_query($koneksi, $query);

    move_uploaded_file($tmp_foto, "../foto/$nama_ft");

    #jk berhsil
    if ($tambah) {
        header("location:../index.php");
    } else {
        echo "Data Gagal ";
    }

    
?>