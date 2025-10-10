<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #SRUKTUR LOGIKA
    #TF, ELSEIF, ELSE
    #SWITCH

    #OPERATOR PERBANDINGAN (==, !=, > <, >=, <=.,)
    #OPERATOR LOGIKA (AND OR) (&& ||)

    $username = "admin";
    $Pass = "5555";

    if($username == "admin" && $Pass == "12345"){
        echo "login Berhasil";
    }elseif($username == "admin" && $Pass != "12345"){
        echo "Pass Salah";
    }elseif($username != "admin" && $Pass == "12345"){
        echo "username Salah";
    }else{
        echo "Salah Semua ON OL";
    }

    








    // $nama = "Ramz";
    // $nilai = 40;

    // if($nilai >= 70){
    //     echo "Selamat $nama, Kamu Lulus";
    // }elseif($nilai >= 40){
    //     echo "Halo $nama, Kamu Harus Remedial";
    // }elseif($nilai >=30){
    //     echo "Maaf $nama, Kamu Tidak Lulus";
    // }else{
    //     echo "ON OL";
    // }
        




    // if($nilai >60){
    //     echo"Kamu Lulus";
    //     if($nilai >80){
    //         echo " Nilai A";
    //     }
    // }else{
    //     echo "Kamu Tidak Lulus";
    //     if($nilai >20);
    //     echo " Harus Ikut Remedial";
    // }

    ?>
</body>
</html>