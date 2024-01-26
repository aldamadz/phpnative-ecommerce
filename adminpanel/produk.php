<?php
require "session.php";
require "../koneksi.php";

$queryKategori = mysqli_query($conn, "SELECT * FROM kategori");
$jumlahKategori = mysqli_num_rows($queryKategori);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk | Tokotea</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>

<body>
    <?php require "navbar.php" ?>
    <div class="container mt-4">

        < aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="../adminpanel" class="no-decoration text-muted"> <i class="fas fa-home"></i> Home </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="../adminpanel/produk.php" class="no-decoration text-muted"> Produk </a>
                </li>
            </ol>

            // Tambah Produk
            <div class="my-5 col-12 col-md-6">

                <h3>Tambah Produk</h3>

            </div>

    </div>


    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>

</html>