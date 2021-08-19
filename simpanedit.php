<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id_produk'];
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];

    $sql = "UPDATE produk SET nama_produk='$nama', gambar='$gambar', nama_produk='$nama', harga='$harga' WHERE id_produk='$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: listproduk.php');
    } else {
        header('location: simpanedit.php?status=gagal');
    }
}