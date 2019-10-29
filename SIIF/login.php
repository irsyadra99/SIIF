<?php
  include "koneksi.php";
  //ganti mySQLUserName dengan username dari server mySQL Anda
  //ganti mySQLPassWord dengan password dari server mySQL Anda
  $username=$_POST['username'];
  $password=$_POST ['password'];

  $rs = mysqli_query($host, "SELECT * FROM mahasiswa WHERE username='$username' and password='$password'");
  //$row = $rs->mysqli_fetch_array($rs);
  if($rs->num_rows > 0){
    echo "BErhasil";
  }else{
    echo "gagal";
  }
?>
