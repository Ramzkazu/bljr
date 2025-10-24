<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Pilih Tanggal :
        <select>
            <?php
            for($Tanggal=1;$Tanggal<=31;$Tanggal++){
                echo "<option>$Tanggal</option>";
            }
            ?>
        </select>

        <br>
        <br>

        Pilih Bulan :
        <select>
            <?php
            $Bulan= array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                foreach($Bulan as $List){
                echo "<option>$List</option>";
            }
            ?>
        </select>

        <br>
        <br>

        Pilih Tahun :
        <select>
            <?php
            for($Tahun=2025;$Tahun>=1970;$Tahun--){
                echo "<option>$Tahun</option>";
            }
            ?>
        </select>
    </form>
</body>
</html>