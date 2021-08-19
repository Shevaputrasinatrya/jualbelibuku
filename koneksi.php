<?php
$host       ="localhost";
$user       ="root";
$password   ="";
$database   ="uprak";
$conn    =mysqli_connect($host,$user,$password,$database) or die("Gagal Menghubungkan");

if (!$conn) {
   echo 'Gagal Menghubungkan';
}else{
   // echo  'Connect successfully!';
}


function registrasi($data) {
   global $conn;

   $username = strtolower(stripslashes($data["username"]));
   $pass = mysqli_real_escape_string($conn, $data["password"]);
   $pass2 = mysqli_real_escape_string($conn, $data["password2"]);

     // cek username sudah ada atau belum
     $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
     
     if( mysqli_fetch_assoc($result) ) {
         echo "<script>
                 alert('username yang dipilih sudah terdaftar!')
               </script>";

         return false;
     }

   // cek konfirmasi password
   if( $pass !== $pass2 ) {
      echo "<script>
            alert('konfirmasi password tidak sesuai!');
          </script>";
      return false;
   }

   // enkrpsi password
     $pass = password_hash($pass, PASSWORD_DEFAULT);

     // tambahkan userbaru ke database
     mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$pass')");

     return mysqli_affected_rows($conn);
}
?>

