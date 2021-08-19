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

    <!-- gfont -->
    <!-- gfont -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">

    <title>list produk</title>
</head>
<style>
    .topnav {
        font-size: 15px;
        font-family: 'Chango', cursive;
        color: white;
    }
    .footer {
                width: 100%;
                height: 60px;
                box-shadow: 2px 2px 10px grey;
                display: flex;
                align-items: center;
                padding-left: 9%;
                background-color: #b40a7d;
                font-size: 20px;
                font-family: 'Chango', cursive;
                margin-start: 200px;
                text-align: center;
            }
</style>

<body>
    <div class="topnav mb-4">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b40a7d">
            <div class="container-fluid ms-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand  text-light mb-1">D'crepes</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3 text-light">
                        <li class="nav-item ">
                            <a class="nav-link text-light" aria-current="page" href="index.php">Dashboard</a>
                        </li>
                    </ul>
                    <form class="d-flex  text-light me-3">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light ms-2" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>


    <div class="container-sm">
        <h4><a class="btn mb-3 mt-5 text-light" style="background-color:#b40a7d" href="listproduk.php">back</a></h4>

        <table class="table table-bordered text-center mt-4 mb-5">
            <thead class="bg text-white" style="background-color: #b40a7d">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <!-- <th>Modify</th> -->
                </tr>
            </thead>

            <?php
            $sql = "SELECT * FROM customer";
            $query = mysqli_query($conn, $sql);

            while ($produk = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $produk['id_customer'] . "</td>";
                echo "<td><img src='" . $produk['email'] . "' width='100' height='100'></td>";
                echo "<td>" . $produk['kata_sandi'] . "</td>";

                // echo "<td>";
                // echo "<a class='btn btn-primary mt-5 m-1' href='edit.php?id_produk=" . $produk['id_produk'] .  "'>Edit</a> ";
                // echo "<a class='btn btn-danger mt-5 m-1' href='hapus.php?id_produk=" . $produk['id_produk'] . "'>Delete</a> ";
                // echo "</td>";
                // echo "</tr>";
            }
            ?>
        </table>
    </div>
    </div>

    <!-- <div class="footer">
        <p class="text-light"><i class="far fa-copyright m-3 ms-5 mt-4"></i>D'crepes 2021</p>
    </div> -->

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