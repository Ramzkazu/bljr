<?php

    #Mengkoneksikan PHP ke MySql

    include("koneksi.php");
    
    #ambil value dari form
    $nama = $_POST["nama"];
    $nisn = $_POST["nisn"];
    $tp_lahir = $_POST["tp_lahir"];
    $tg_lahir = $_POST["tg_lahir"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];
    $jk = $_POST["jk"];
    $jur = $_POST["jur"];

    #proses tambah data
    $query = "INSERT INTO biodata (nama,nisn,tp_lahir,tgl_lahir,alamat,email,jk,jur)
    VALUES ('$nama','$nisn','$tp_lahir','$tg_lahir','$alamat','$email','$jk','$jur')";
    
    $tambah = mysqli_query($koneksi, $query);


    #jk berhsil
    if ($tambah) {
        header("location:index.php");
    } else {
        echo "Data Gagal ";
    }
?>