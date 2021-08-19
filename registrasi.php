<?php

    include 'koneksi.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
             </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>

    <style>
       
       @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-weight: 300;
        }

        body {
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
        }

        body ::-webkit-input-placeholder {
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
        }

        body :-moz-placeholder {
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            opacity: 1;
            font-weight: 300;
        }

        body ::-moz-placeholder {
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            opacity: 1;
            font-weight: 300;
        }

        body :-ms-input-placeholder {
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
        }

        .wrapper {
            background: #50a3a2;
            background: linear-gradient(top left, #50a3a2 0%, #53e3a6 100%);
            background: linear-gradient(to bottom right, #50a3a2 0%, #53e3a6 100%);
            position: fixed;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            height: 100%;
            top: 0%;
            overflow: hidden;
        }

        .wrapper.form-success .container h1 {
            transform: translateY(85px);
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 80px 0;
            height: 400px;
            text-align: center;
        }

        .container h1 {
            font-size: 40px;
            transition-duration: 1s;
            transition-timing-function: ease-in-    put;
            font-weight: 200;
        }

        form {
            padding: 20px 0;
            position: relative;
            z-index: 2;
        }

        form input {
            appearance: none;
            outline: 0;
            border: 1px solid rgba(225, 225, 225, 0.4);
            background-color: rgba(225, 225, 225, 0.2);
            width: 250px;
            border-radius: 3px;
            padding: 10px 15px;
            margin: 0 auto 10px auto;
            display: block;
            text-align: center;
            font-size: 18px;
            color: white;
            -webkit-transition-duration: 0.25s;
                transition-duration: 0.25;
            font-weight: 300;
        }

        form input:hover {
            background-color: rgba(225, 225, 225, 0.4);
        }

        form input:focus {
            background-color: white;
            width: 300px;
            color: #53e3a6;
        }

        form button {
            appearance: none;
            outline: 0;
            border-color: white;
            border: 0;
            padding: 10px 15px;
            color: #53e3a6;
            border-radius: 3px;
            width: 250px;
            cursor: pointer;
            font-size: 18px;
            transition-duration: 0.25s;
        }

        form button:hover {
            background-color: #f5f7f9;
        }

        .box .square {
            position: absolute;
            backdrop-filter: blur(5px);
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(225, 225, 225, 0.5);
            border-right: 1px solid rgba(225, 225, 225, 0.2);
            border-bottom: 1px solid rgba(225, 225, 225, 0.2);
            background: rgba(225, 225, 225, 0.1);
            border-radius: 10px;
            animation: animate 10s linear infinite;
            animation-delay: calc(-1s * var(--i));
        }

        @keyframes animate
        {
            0%,100%
            {
                transform: translateY(-40px);
            }
            50%
            {
                transform: translateY(40%);
            }
        }

        .box .square:nth-child(1) {
            top: 100px;
            right: 400px;
            width: 100px;
            height: 100px;
        }

        .box .square:nth-child(2) {
            top: 150px;
            left: 300px;
            width: 120px;
            height: 120px;
            z-index: 2;
        }

        .box .square:nth-child(3) {
            bottom: 100px;
            right: 500px;
            width: 80px;
            height: 80px;
            z-index: 2;
        }

        .box .square:nth-child(4) {
            bottom: 100px;
            left: 400px;
            width: 50px;
            height: 50px;
            z-index: 2;
        }

        .box .square:nth-child(5) {
            top: 100px;
            left: 600px;
            width: 60px;
            height: 60px;
        }

        .box .square:nth-child(6) {
            top: 430px;
            left: 600px;
            width: 60px;
            height: 60px;
        }

        .box .square:nth-child(7) {
            top: 100px;
            left: 950px;
            width: 80px;
            height: 80px;
        }

        .box .square:nth-child(8) {
            top: 400px;
            right: 1130px;
            width: 170px;
            height: 170px;
        }

        .box .square:nth-child(9) {
            top: 70px;
            right: 1190px;
            width: 80px;
            height: 80px;
        }

        .box .square:nth-child(10) {
            top: 300px;
            left: 1100px;
            width: 200px;
            height: 200px;
        }

    </style>

</head>
<body>

    <h1> Halaman Registrasi </h1>

    <div class="wrapper">
        <div class="container">
            <br><br><br><br>
            <h1>Selamat Datang</h1>
        <form class="form" action="" method="post">
            <input type="text" name="username" id="username" placeholder="Masukkan username" required>
            <input type="password" name="password" id="password" placeholder="Masukkan password" required>
            <input type="password" name="password2" id="password2" placeholder="Konfirmasi password">
            <button type="submit" name="register">Register</button>
        </form>
    </div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="square" style="--i:5;"></div>
            <div class="square" style="--i:6;"></div>
            <div class="square" style="--i:7;"></div>
            <div class="square" style="--i:8;"></div>
            <div class="square" style="--i:9;"></div>
        </div>
    </div>

    <!-- <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">Register</button>
        </li>
    </ul> -->

</body>
</html>