<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload foto</title>
</head>
<body>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        Keterangan :
        <input type="text" name="keterangan">

        <br>
        <br>

        Foto :
        <input type="file" accept="image/*" name="foto">

        <br>
        <br>

        <button type="submit">Proses</button>
    </form>
</body>
</html>