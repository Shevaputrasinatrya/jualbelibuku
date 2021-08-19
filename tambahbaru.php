<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

     <!-- font awesome -->
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        

    <title>Uji Level</title>

    <style>

        body {
            background-image: linear-gradient(to right, #FFEEEE, #DDEFBB);
        }

        .container {
            padding: 5px 30px;
            margin: 30px auto;
            box-shadow: 2px 2px 8px #FA8231;
            width: 45%;
            margin-top: 120px;
        }

        .container h1 {
            font-family: 'Quicksand', sans-serif;
            font-weight: bold;
            font-size: 30px;
            color: black;
            text-align: center;
        }

    #back {
        position: absolute;
        width: 110px;
        margin-left: 1px;
        margin-top: 6px;
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
            margin-left: 85%;
        }

    </style>
</head>

<body>

    <div class="latar">

    <form method="POST" name="forminput">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <h1 class="mb-5 mt-4">Form Input Buku</h1>
                        <form action="simpan.php" method="post">
                            <div class="form-group row">
                                <label for="Gambar" class="col-sm-4 col-form-label">Gambar Buku</label>
                                <div class="col-sm-8">
                                    <input type="url" class="form-control mb-2" id="gambar" name="gambar" placeholder="Masukkan link gambar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-4 col-form-label">Judul Buku</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control mb-2" name="nama_produk">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga" class="col-sm-4 col-form-label">Harga Buku</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control mb-2" name="harga"
                                        id="harga">
                                </div>
                            </div>
                        </form>
                        <a href="listproduk.php"><button type="button" class="btn" id="back"><i class="far fa-hand-point-left"></i> <span>Back</span></button></a>
                        <input type="submit" name="simpan" value="simpan" class="btn mt-2 mb-3 text-light bg-success">
                        <div id="edit-btn"></div>
                    </div>
                </div>
            </div>
    </form>
</div>

    <?php
    if (isset($_POST['simpan'])) {
        $id = $_POST['id_produk'];
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $gambar = $_POST['gambar'];
        $sql = "INSERT INTO produk (id_produk,nama_produk,gambar,harga) 
        VALUES ('$id', '$nama','$gambar','$harga')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script>
            alert('Buku berhasil ditambahkan!');
            document.location='listproduk.php';
         </script>";
        } else {
            header('location: simpan.php?status=gagal');
        }
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>