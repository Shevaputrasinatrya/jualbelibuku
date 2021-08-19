<?php
include 'koneksi.php';
$id = $_GET['id_produk'];
$sql    = "SELECT * FROM produk WHERE id_produk='$id'";
$query  = mysqli_query($conn, $sql);
$produk = mysqli_fetch_assoc($query);

?>


<!doctype html>
<html lang="en">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- font awesome -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<!-- font google-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous"></script>

<style>

    body {
        background-image: linear-gradient(to right, #ECE9E6, #FFFFFF);
        }

    .card {
        box-shadow: 2px 2px 8px #FA8231;
        width: 900px;
        height: 400px;
        margin-top: 80px;
        margin-left: 10%;
    }

    #back {
        position: absolute;
        width: 110px;
        margin-left: -90px;
        margin-top: 15px;
        margin-bottom: 50px;
    }

    a #back {
          box-shadow: 2px 2px 8px #FA8231;
        }

    a #back span {
          color: black;
          font-family: 'Akaya Telivigala', cursive;
        }

    a #back:hover {
          background-color: #FA8231;
        }

    .btn {
            margin-left: 95%;
            width: 120px;
    }

</style>

</style>
<title>edit</title>
</head>

<body>
            <div class="container mt-5" style="margin-top:50px">
                <div class="row">
                    <div class="card">
                        <h4 class="mt-5 mb-4 text-black text-center">Form Edit Data Barang</h4>

                        <div class="card-body">
                            <form action="simpanedit.php" method="post">
                                <input type="text" hidden name="id_produk" value="<?= $produk['id_produk'] ?>">
                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label mb-3">Gambar Buku</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="gambar" class="col-md-10"
                                            placeholder="Masukkan link gambar" value="<?= $produk['gambar'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label mb-3">Judul Buku</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="nama_produk" class="col-md-10"
                                            value="<?= $produk['nama_produk'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label mb-3">Harga Buku</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="harga" class="col-md-10"
                                            value="<?= $produk['harga'] ?>">
                                    </div>
                                </div>


                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-9">
                                    <a href="listproduk.php"><button type="button" class="btn" id="back"><i class="far fa-hand-point-left"></i> <span>Back</span></button></a>
                                        <button class="btn mt-3 mb-2 text-white fw-bold bg-success" type="submit"
                                            name="submit" onclick = "return confirm('Yakin ingin merubah ?');" >Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- <footer class="page-footer font-small mt-1">
        <div class="footer-copyright text-center text-white py-3"> <i class="fas fa-store"></i>
            </svg>Starbhak Mart</div>
    </footer> -->

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
        header('Location: index.php');
    } else {
        header('location: simpanedit.php?status=gagal');
    }
}
?>


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>