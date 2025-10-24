<?php
if(isset($_POST['tbl'])){
    //jika ada aktifitas dari tombol log in
        $hari = $_POST['Hari'];

        switch($hari){
        
        case 1:
        echo "Hari Minggu";
        break;
        
        case 2:
            echo "Hari Senin";
            break;
        
        case 3:
            echo "Hari Selasa";
            break;

        case 4:
            echo "Hari Rabu";
            break;
            
        case 5:
            echo "Hari Kamis";
            break;

        case 6:
            echo "Hari Jum'at";
            break;
            
        case 7:
            echo "Hari Sabtu";
            break;

        default:
            echo "Tidak Ada Hari";
            break;
    }
        
        echo "<hr>";
}   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hari</h1>
    <form action="from-switch.php" method="POST">
        <table>
            <tr>
                <td>Hari</td>
                <td><input type="number" name="Hari"></td>
            </tr>
            <tr>
                <td></td>  
                <td><button type="submit" name="tbl">hari</button></td>
            </tr>
        </table>
    </form>
</body>
</html>