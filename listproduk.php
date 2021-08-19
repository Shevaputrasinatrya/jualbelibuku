<?php 

include 'koneksi.php';

session_start();
// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "</pre>";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>list produk</title>
</head>

<style>
    
    .head {
            width: 100%;
            height: 200px;
            box-shadow: 2px 2px 8px #54a0ff;
            margin-bottom: 30px;
            background: #000;
            margin: 0px;
            padding: 0px;
            margin-bottom: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Bad Script', cursive;
        }

        .head:after {
            content: '';
            display: block;
            clear: both;
        }

        h2 {
            margin: 0;
            padding: 0;
            color: #111;
            font-size: 6em;
        }

        h2 span {
            letter-spacing: 10px;
            display: table-cell;
            margin: 0px;
            padding-top: 20px;
            animation: animate 2s linear infinite;
        }

        h2 span:nth-child(1) {
            animation-delay: 0s
        }

        h2 span:nth-child(2) {
            animation-delay: 0.25s
        }

        h2 span:nth-child(3) {
            animation-delay: 0.5s
        }

        h2 span:nth-child(4) {
            animation-delay: 0.75s
        }

        h2 span:nth-child(5) {
            animation-delay: 1s
        }

        h2 span:nth-child(6) {
            animation-delay: 1.25s
        }

        h2 span:nth-child(7) {
            animation-delay: 1.5s
        }

        h2 span:nth-child(8) {
            animation-delay: 1.75s
        }

        h2 span:nth-child(9) {
            animation-delay: 2s
        }

        h2 span:nth-child(10) {
            animation-delay: 2.25s
        }

        h2 span:nth-child(11) {
            animation-delay: 2.5s
        }

        h2 span:nth-child(12) {
            animation-delay: 2.75s
        }

        h2 span:nth-child(13) {
            animation-delay: 3s
        }

        h2 span:nth-child(14) {
            animation-delay: 3.25s
        }

        h2 span:nth-child(15) {
            animation-delay: 3.5s
        }

        h2 span:nth-child(16) {
            animation-delay: 3.75s
        }

        h2 span:nth-child(17) {
            animation-delay: 4s
        }

        h2 span:nth-child(18) {
            animation-delay: 4.25s
        }

  @keyframes animate {

      0%,
      100% {
          color: #fff;
          filter: blur(2px);
          text-shadow: 0 0 10px #FA8231,
              0 0 20px #FA8231,
              0 0 40px #FA8231,
              0 0 80px #FA8231,
              0 0 120px #FA8231,
              0 0 200px #FA8231,
              0 0 230px #FA8231,
              0 0 250px #FA8231,
              0 0 270px #FA8231,
              0 0 300px #FA8231,
              0 0 330px #FA8231,
              0 0 350px #FA8231,
              0 0 370px #FA8231,
              0 0 400px #FA8231,
              0 0 430px #FA8231,
              0 0 450px #FA8231,
              0 0 470px #FA8231,
              0 0 500px #FA8231;
      }

      5%,
      95% {
          color: #111;
          filter: blur(0px);
          text-shadow: none;
      }
  }

    .back {
        width: 150px;
        margin-left: 1%;
        margin-top: -30px;
        margin-bottom: 50px;
    }

    a .back {
          box-shadow: 2px 2px 8px #FA8231;
        }

    a .back span {
          color: black;
          font-family: 'Akaya Telivigala', cursive;
        }

    a .back:hover {
          background-color: #FA8231;
        }

    .tambah {
      width: 190px;
      margin-left: 67%;
      margin-bottom: 70px;
      margin-top: -7px;
    }

    a .tambah{
          box-shadow: 2px 2px 8px #54a0ff;
        }

    a .tambah span {
          color: black;
          font-family: 'Akaya Telivigala', cursive;
        }

    .tambah:hover {
          background-color: #54a0ff;
        }

    .btn-primary {
        background-color: #54a0ff;
        width: 100px;
    }

    .btn-danger {
        background-color: #FA8231;
        width: 100px;
    }

    .fa-star-half{
    margin-right: -10px;
    }

    .footer {
        width: 100%;
        height: 200px;
        background-color: #0c246152;
        padding-left: 100px;
        padding-top: 10px;
        margin-top: 100px;
    }

    .footer p:first-child {
        font-family:  'Quicksand', sans-serif;
        font-weight: bold;
        color: #FA8231;
        font-size: 30px;
    }

    .footer p:nth-child(2) {
        font-family:  'Quicksand', sans-serif;
        font-weight: bold;
        color: #0C2461;
        font-size: 30px;
        margin-left: 85px;
        margin-top: -60px;
    }

    .footer p:nth-child(3) {
        font-family:  'Quicksand', sans-serif;
        color: #666262;
        margin-left: 25px;
        margin-top: -17px;
        font-size: 13px;
    }

    .footer p:nth-child(4) {
        font-family:  'Quicksand', sans-serif;
        color: #666262;
        margin-left: 12px;
        margin-top: -17px;
        font-size: 13px;
    }

    #contact p:first-child {
        font-family:  'Quicksand', sans-serif;
        color: black;
        font-size: 20px;   
        margin-top: -150px;
        margin-left: 40%;
    }

    #contact p:last-child {
        font-family: 'Roboto', sans-serif;
        color: #3C3939;
        font-size: 15px;
        margin-top: -12px;
        margin-left: 40%;
    }

</style>

<body>
<header>
        <div class="head">
      <h2>
        <span>C</span>
        <span>h</span>
        <span>o</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>

        <span>Y</span>
        <span>o</span>
        <span>u</span>
        <span>r</span>

        <span>F</span>
        <span>a</span>
        <span>v</span>
        <span>o</span>
        <span>r</span>
        <span>i</span>
        <span>t</span>
        <span>e</span>
      </h2>
  </header>

    <div class="container-sm">
        <a href="index.php"><button type="button" class="btn back"><i class="far fa-hand-point-left"></i> <span>Back</span></button></a>
        <!-- <h4><a class="btn mb-3 mt-5 text-light" style="background-color:#b40a7d" href="customer.php">User Login</a></h4> -->
        <a href="tambahbaru.php"><button type="button" class="btn tambah"><i class="fas fa-plus"></i> <span>Tambah Baru</span></button></a>
        
        <table class="table table-bordered text-center mt-4 mb-5">
            <thead class="bg text-white" style="background-color: #000">
                <tr>
                    <th>No</th>
                    <th>Gambar Buku</th>
                    <th>Judul Buku</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php
            $sql = "SELECT * FROM produk";
            $query = mysqli_query($conn, $sql);

            while ($produk = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $produk['id_produk'] . "</td>";
                echo "<td><img src='" . $produk['gambar'] . "' width='130' height='150'></td>";
                echo "<td>" . $produk['nama_produk'] . "</td>";
                echo "<td>" . $produk['harga'] . "</td>";

                echo "<td>";
                echo "<a class='btn btn-primary mt-4 m-1' href='edit.php?id_produk=" . $produk['id_produk'] .  "'>Edit</a> ";
                echo "<a class='btn btn-danger mt-4 m-1' href='hapus.php?id_produk=" . $produk['id_produk'] . "'>Delete </a> ";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    </div>


    <div class="footer">
 <p><i class="far fa-star-half"></i>Star</p>
            <p>Book</p>
            <p> *Jika buku/barang ini ingin ditukar maka pastikan </p>
            <p> label kode yang ditempel di buku tidak hilang <br>
                proses untuk dapat menukar dengan layak.<br>
                Jika label kode hilang maka pihak kami tidak dapat <br>
                menukar, <b>untuk info detail lebih lanjut silahkan <br>
             	hubungi pustakawan :</b><br>
                <i>Hub. Contact yang tertera</i>.</p>


            <div id="contact">
                <P>Contact</P>
                    <p>No. WA<br>
                        <u>089546758890 ( + Sinta ) <br>
						089567899077 ( + Keyla ) <br>
						0857716088100 ( + David )</u></p>
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