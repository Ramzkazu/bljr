<?php
include_once("../koneksi.php");

// Validasi parameter
if (!isset($_GET['id_pesanan'])) {
    die("ID Pesanan tidak ditemukan!");
}

$idedit = $_GET['id_pesanan'];
$qry = "SELECT * FROM pesanan WHERE id_pesanan='$idedit'";
$edit = mysqli_query($koneksi, $qry);

// Cek query berhasil
if (!$edit) {
    die("Query gagal: " . mysqli_error($koneksi));
}

$data = mysqli_fetch_array($edit);

// Cek data ada
if (!$data) {
    die("Data tidak ditemukan!");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color:#d1e6d4">
    <?php
    include_once("../nav.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>FORM EDIT PELANGGAN</b>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST">
                            <input type="hidden" name="id_pesanan" value="<?=$data['id_pesanan']?>">
                            
                            <div class="mb-3">
                                <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                                <input value="<?=$data['nama_pelanggan']?>" name="nama_pelanggan" type="text" class="form-control" id="nama_pelanggan" required>
                            </div>
                            <div class="mb-3">
                                <label for="produk" class="form-label">Produk</label>
                                <input value="<?=$data['produk']?>" name="produk" type="text" class="form-control" id="produk" required>
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input value="<?=$data['jumlah']?>" name="jumlah" type="number" class="form-control" id="jumlah" required min="1">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_pesan" class="form-label">Tanggal Pesan</label>
                                <input value="<?=$data['tanggal_pesan']?>" name="tanggal_pesan" type="date" class="form-control" id="tanggal_pesan" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="index.php" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>