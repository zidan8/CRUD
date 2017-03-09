<?php
include 'koneksi.php';
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$pekerjaan = $_POST['pekerjaan'];
//komeksi data
$conn = mysql_connect("dbhost","db_user","db_password");
mysql_select_db("malesngoding");
mysql_query("UPDATE user SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id'");
header("location:index.php?pesan=update");
$hasil = mysql_query($query);  
if($hasil){  
 echo "Data siswa telah disimpan";  
}else{  
 echo "Error! gagal menyimpan data siswa:".mysql_error();  
}  
?>