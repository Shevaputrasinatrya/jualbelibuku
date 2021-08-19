<?php 

include 'koneksi.php';

session_start();
// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "</pre>";
?>


<body>
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
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <title>uprak</title>

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

    #order {
        width: 170px;
        margin-left: 43%;
        margin-top: -30px;
        margin-bottom: 50px;
    }

    #order{
          box-shadow: 2px 2px 8px #FA8231;
        }

    #order span {
          color: black;
          font-family: 'Akaya Telivigala', cursive;
        }

    #order:hover {
          background: #FA8231;
          color: white;
        }

    .container {
        margin-left: 140px;
    }

    .card-body:hover{
        box-shadow: 2px 2px 8px #54a0ff;
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
        margin-top: 900px;
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
</head>

<body>

    <header>
        <div class="head">
      <h2>
        <span>P</span>
        <span>o</span>
        <span>p</span>
        <span>u</span>
        <span>l</span>
        <span>a</span>
        <span>r</span>

        <span>B</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span>s</span>
        
        <span>T</span>
        <span>o</span>
        <span>d</span>
        <span>a</span>
        <span>y</span>
        <span>!</span>
      </h2>
  </header>

        <a href="listproduk.php"><button type="button" class="btn fs-5" id="order"><i class="fas fa-book-reader"></i> <span>Order</span></button></a>

        <div class="container">
            <?php $ambil = $conn->query("SELECT * FROM produk")?>
            <?php while($perproduk = $ambil->fetch_assoc()):?>
            <div class="card m-3 float-start" style="width: 11rem; height: 380px;">
                <div class="card-body  text-center ">
                    <img src="<?= $perproduk['gambar'] ?>" class="card-img-top" style="height: 170px;" alt="...">
                    <div class="card-body mt-3">
                        <h6 class="card-title"><small><?= $perproduk['nama_produk'] ?></small></h6>
                        <p class="card-text">Rp. <?= number_format($perproduk['harga'])?></p>
                        <!-- Button trigger modal -->
                        <a href="details.php?id_produk=<?= $perproduk["id_produk"] ?>"  class="btn mt-2 text-light bg-primary">Detail </a>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
        </div>




        <!-- footer -->
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

    </body>

    </html>
















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