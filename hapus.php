<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    header('Location: index.php');
}
$id_produk = $_GET['id_produk']; 

$sql    = "DELETE FROM produk WHERE id_produk='$id_produk'";
$query  = mysqli_query($conn, $sql);

if ($query) {
    echo "<script>
			alert('Hapus Data Sukses!!');
			document.location='listproduk.php';
		</script>";

}else {
    header('Location: listproduk.php?status=gagal');
}
?>