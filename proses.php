<?php
 
 $user = $_POST['username'];
 $password = $_POST['password'];
  
 if ($user == "admin" and $password == "admin"){
  
  //echo"Login Berhasil";
 	<a href="home.php">Halaman HOME</a>
 }else{
  echo"<script language='javascript'>alert('Terjadi kesalahan, silakan ulangi !')</script>";
  echo"<script language='javascript'>window.location = '../login'</script>";
 }
?>