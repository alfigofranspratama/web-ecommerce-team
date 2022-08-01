<?php
require 'asset/sistem/koneksi.php';

$allkategori = $db->query("SELECT * FROM tb_kategori");

$jumlahproduk = $db->countRows("SELECT * FROM tb_produk");

$produkterbaru = $jumlahproduk - 5;
$allproduk = $db->countRows("SELECT * FROM tb_produk LIMIT $produkterbaru, 5");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PashionShop</title>
    <!-- css -->
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/home.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">

    <style>
        .card:hover {
    box-shadow: 3px 3px 3px grey;
}
    </style>
</head>
<body>
    <!-- header -->
    <?php include 'asset/include/user/header.php' ?>
    <!-- endheader -->

    <!-- navbar -->
    <?php include 'asset/include/user/navbar.php' ?>
    <!-- end navbar -->

    <!-- caourcel -->
    <?php include 'asset/include/user/caourcel.php' ?>
    <!-- end caourcel -->

    <!-- kategori -->
    <?php include 'asset/include/user/kategori.php' ?>
    <!-- end kategori -->

    <!-- produk terbaru -->
    <?php include 'asset/include/user/produkterbaru.php' ?>
    <!-- end produk terbaru -->


    <!-- footer -->
    <?php include 'asset/include/user/footer.php' ?>
    <!-- end footer -->
<!-- js -->
<script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>