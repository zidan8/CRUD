<!DOCTYPE html>
<html>
	<head>
		<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
			<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="judul">
			<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
			<h2>Menampilkan data dari database</h2>
		</div>
			<br/>
				<a href="index.php">Lihat Semua Data</a>
			<br/>
				<h3>Edit data</h3>
<?php
	include "koneksi.php";
		$id = $_GET['id'];
		$query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
		$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
?>

	<form action="update.php" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>

<?php } ?>
</body>
</html>