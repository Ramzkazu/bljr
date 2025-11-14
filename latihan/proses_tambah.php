<?php

    #Mengkoneksikan PHP ke MySql

    include("koneksi.php");
    
    #ambil value dari form
    $kode = $_POST["kd"];
    $nama = $_POST["nm"];


    #proses tambah data
    $query = "INSERT INTO jurusan (nm_jurusan,nm_matapelajaran)
    VALUES ('$kode','$nama')";
    
    $tambah = mysqli_query($koneksi, $query);


    #jk berhsil
    if ($tambah) {
        header("location:index.php");
    } else {
        echo "Data Gagal ";
    }
?>