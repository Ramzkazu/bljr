<?php
if(isset($_POST['tbl'])){
        $nama = $_POST['Nm'];
        $nilai = $_POST['nilai'];

    if($nilai >= 86){
        echo "Halo $nama Nilai $nilai, Grade A";
    }elseif($nilai >= 70){
        echo "Halo $nama Nilai $nilai, Grade B";
    }elseif($nilai >= 60){
        echo "Halo $nama Nilai $nilai, Grade C";
    }elseif($nilai >= 50){
        echo "Halo $nama Nilai $nilai, Grade D";
    }else{
        echo "Halo $nama Nilai $nilai, Grade E";
    }
        echo "<hr>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <h1>PROM HITUNG</h1>
    <form action="lth.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nm"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="number" name="nilai"></td>
            </tr>
            <tr>
                <td></td>  
                <td><button type="submit" name="tbl">Hitung</button></td>
            </tr>
        </table>
    </form>
</body>
</html>