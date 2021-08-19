<?php
include 'koneksi.php';
$id_produk = $_GET['id_produk'];
$sql    = "SELECT * FROM produk WHERE id_produk='$id_produk'";
$query  = mysqli_query($conn, $sql);
$produk = mysqli_fetch_assoc($query);
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <title>Detail</title>

    <style>

    body {
        background-image: linear-gradient(to right, #ECE9E6, #FFFFFF);
    }

    .card {
        width: 600px;
        height: 400px;
        box-shadow: 2px 2px 8px #FA8231;
        padding-top: 45px;
    }

    .col-sm-6 input {
        width: 250px;
    }

    .col-sm-6 input:hover {
        border: 2px solid #54a0ff;
    }

    #back {
        position: absolute;
        width: 110px;
        margin-left: -60px;
        margin-bottom: 50px;
    }

    a #back {
          box-shadow: 2px 2px 8px #54a0ff;
        }

    a #back span {
          color: black;
          font-family: 'Akaya Telivigala', cursive;
        }

    a #back:hover {
          background-color: #54a0ff;
        }

    #tambah {
      width: 110px;
      margin-left: 87%;
      margin-bottom: 70px;
      margin-top: -7px;
    }

    a #tambah{
          box-shadow: 2px 2px 8px #FA8231;
        }

    a #tambah span {
          color: black;
          font-family: 'Akaya Telivigala', cursive;
        }

    #tambah:hover {
          background-color: #FA8231;
        }


    </style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="container" style="margin-top:70px">
                <div class="container mt-4 ml-5 justify-content-center">
                    <div class="card container">
                        <h4 class="mt-1 mb-5 text text-center">Detail Buku</h4>
                            <form action="simpanedit.php" method="post">
                                <input type="text" hidden name="id_produk" value="<?= $produk['id_produk'] ?>">
                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label mb-3">Judul Buku</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="nama_produk" class="col-md-10" value="<?= $produk['nama_produk'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label mb-3">Harga Buku</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="harga" class="col-md-10" value="<?= $produk['harga'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label mb-3">Link Gambar</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="gambar" class="col-md-10" value="<?= $produk['gambar'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-sm-9">
                                    <a href="index.php"><button type="button" class="btn mt-4" id="back"><i class="far fa-window-close"></i></i> <span>Close</span></button></a>
                                    <a href="tambahbaru.php"><button type="button" class="btn mt-4" id="tambah"><i class="fas fa-cart-plus"></i> <span>Add</span></button></a>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>
</html>