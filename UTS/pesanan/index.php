<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracker</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/all.css">

</head>

<body style="background-color:#d1e6d4">
    <?php
    include_once("../nav.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-10 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>Order Tracker</b>
                        <a href="formtambah.php" class="float-end btn btn-primary btn-sm"><i class="fa-solid fa-user-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pelanggan</th>
                                    <th scope="col">Produk</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Tanggal Pesan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../koneksi.php");

                                $qry = "SELECT * FROM pesanan";
                                $tampil = mysqli_query($koneksi, $qry);

                                $nomor = 1;
                                foreach($tampil as $data){
                                ?>
                                <tr>
                                    <th scope="row"><?=$nomor++?></th>
                                    <td><?=$data['nama_pelanggan']?></td>
                                    <td><?=$data['produk']?></td>
                                    <td><?=$data['jumlah']?></td>
                                    <td><?=$data['tanggal_pesan']?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalDetail<?=$data['id_pesanan']?>"><i class="fa-solid fa-magnifying-glass"></i></button>
                                        <a href="formedit.php?id_pesanan=<?=$data['id_pesanan']?>" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus<?=$data['id_pesanan']?>"><i class="fa-solid fa-trash"></i></button>

                                        <!-- Modal Detail -->
                                        <div class="modal fade" id="modalDetail<?=$data['id_pesanan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Detail <?=$data['nama_pelanggan']?></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Nama Pelanggan</td>
                                                                    <th scope="row"><?=$data['nama_pelanggan']?></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Produk</td>
                                                                    <th scope="row"><?=$data['produk']?></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jumlah</td>
                                                                    <th scope="row"><?=$data['jumlah']?></th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Pesanan</td>
                                                                    <th scope="row"><?=$data['tanggal_pesan']?></th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Hapus -->
                                        <div class="modal fade" id="modalHapus<?=$data['id_pesanan']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Yakin Data Dengan Nama <b><?=$data['nama_pelanggan']?></b> Ingin Dihapus?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <a href="proseshapus.php?id_pesanan=<?=$data['id_pesanan']?>" class="btn btn-danger">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script src="../js/all.js"></script>
</body>

</html>