<?php 

	$conn = mysqli_connect("localhost","root","","universitas") or die ("koneksi ke database gagal");

	function tambah($data){

		global $conn;

		$nrp = $data["nrp"];
		$nama = $data["nama"];
		$alamat = $data["alamat"];
		$jurusan = $data["jurusan"];

		if ($data["jurusan"] == "Telekomunikasi") {


			$query = "INSERT INTO `mahasiswa` (`NRP`, `Nama`, `Alamat`, `ID_Jur`) VALUES ('$nrp', '$nama', '$alamat', '$jurusan');";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "Elka") {


			$query = "INSERT INTO `mahasiswa` (`NRP`, `Nama`, `Alamat`, `ID_Jur`) VALUES ('$nrp', '$nama', '$alamat', '$jurusan');";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "IT") {


			$query = "INSERT INTO `mahasiswa` (`NRP`, `Nama`, `Alamat`, `ID_Jur`) VALUES ('$nrp', '$nama', '$alamat', '$jurusan');";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "Elin") {


			$query = "INSERT INTO `mahasiswa` (`NRP`, `Nama`, `Alamat`, `ID_Jur`) VALUES ('$nrp', '$nama', '$alamat', '$jurusan');";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

	}

	function hapus($data){

		global $conn;

		$nrp = $data["hapusnrp"];
		$query = "DELETE FROM mahasiswa WHERE NRP = $nrp";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}

	function pencarian($data){

		global $conn;

		$cari = $data["cari"];
		$query = "SELECT * FROM `mahasiswa` WHERE NRP = '$cari'";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}



 ?>
