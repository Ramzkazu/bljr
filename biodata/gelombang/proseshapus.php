<?php 
    #1. koneksi
    include_once("../koneksi.php");

    #2. ID hapus
    $idhapus = $_GET['id'];

    #3. menulis query
    $qry = "DELETE FROM gelombang WHERE id=_gel'$idhapus'";

    #4. menjalan query
    $hapus = mysqli_query($koneksi,$qry);

    #5. mengalihkan halaman
    header("location:index.php");
?>