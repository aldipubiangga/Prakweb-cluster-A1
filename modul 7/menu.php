<?php 
	
	require 'function.php';


	if (isset($_POST["tambah"])){
		if (tambah($_POST)>0) {
			echo "<script>alert('Data berhasil ditambahkan!');</script>";
		}

		else {
			echo "<script>alert('Data gagal ditambahkan!');</script>";
		}

	}

	if (isset($_POST["Temukan"])){
		if (cari($_POST)>0) {
			echo "<script>alert('Data berhasil ditemukan!');</script>";
		}

	}

	if (isset($_GET["del"])) {
		if (hapus($_GET)>0){
			echo "<script>alert('Data berhasil dihapus!');</script>";
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>

	<h1>DATA MAHASISWA PENS</h1>
	<p>=========================================</p>
	<h2>TAMBAH DATA</h2>
	<form action="" method="post" >
	<label for="nrp">NRP: </label>
	<input type="text" id="nrp" name="nrp">
	<br>
	<label for="nama">Nama: </label>
	<input type="text" id="nama" name="nama">
	<br>
	<label for="alamat">Alamat: </label>
	<input type="text" id="alamat" name="alamat">
	<br>
	<label>Jurusan: </label>
	<select name="jurusan">
		<option>Telekomunikasi</option>
		<option>Elka</option>
		<option>IT</option>
		<option>Elin</option>
	</select> 
	<br><br><br>
	<button type="submit" name="tambah">Tambah Data</button> 
	<br><br>
	<p>=========================================</p>
	</form>
	<h2>TEMUKAN DATA</h2>
	<br>
	<form action="view.php" method="get">
	<label for="nama">Masukkan NRP: </label>
	<input type="text" id="nama" name="cari">
	<input type="submit" name="Temukan">
	</form>
	<br>
	<p>=========================================</p>
	<h2>HAPUS DATA</h2>
	<br>
	<form action="" method="get">
	<label for="nrpdel">NRP: </label>
	<input type="text" id="nama" name="hapusnrp">
	<button type="submit" name="del" onclick="return confirm('yakin menghapus data ?');">Delete Data</button>
	</form>
	<br>
	<p>=========================================</p>
	

</body>
</html>