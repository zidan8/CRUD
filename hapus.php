<?php
include 'koneksi.php';
	$id = $_GET['id'];
mysql_query("DELETE FROM user WHERE id='$id'")or die(mysql_error());
header("location:index.php?pesan=hapus");
?>