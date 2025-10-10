<?php
if(isset($_POST['tbl'])){
    //jika ada aktifitas dari tombol log in
        $username = $_POST['un'];
        $Pass = $_POST['pas'];

        if($username == "admin" && $Pass == "12345"){
            header(header: "location:logika.php");
            die();
        }elseif($username == "admin" && $Pass != "12345"){
            echo "Pass Salah";
        }elseif($username != "admin" && $Pass == "12345"){
            echo "username Salah";
        }else{
            echo "Salah Semua ON OL";
        }
        echo "<hr>";
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>from login sederhana</title>
</head>
<body>
    <h1>FROM LOGIN SEDERHANA</h1>
    <form action="from-logika.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="un"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pas"></td>
            </tr>
            <tr>
                <td></td>
             <td><button type="submit" name="tbl">Log In</button></td>
             </tr>
        </table>
    </form>
</body>
</html>