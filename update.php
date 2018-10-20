<?php 

include 'koneksi.php';

	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$tgl_lahir = $_POST["tgl_lahir"];
	$jenis_kelamin = $_POST["jenis_kelamin"];
	$hobi = implode(', ', $_POST["hobi"]);
	$fakultas = $_POST["fakultas"];
	$alamat = $_POST ["alamat"];
	$moto = $_POST["moto"];

	mysqli_query ($koneksi, "UPDATE mhs SET 
					nama='$nama',
					tgl_lahir = '$tgl_lahir', 
					jenis_kelamin = '$jenis_kelamin',
					hobi = '$hobi',
					fakultas = '$fakultas',
					alamat = '$alamat',
					moto = '$moto'
					WHERE nim=$nim
					");

	if (mysqli_affected_rows($koneksi) > 0) {
		echo "<script>
			alert('Data Berhasil diupdate');
			document.location.href= 'hasil.php';
		</script>";
	} else {
		echo "<script>
			alert('Data Gagal diupdate');
		</script>";
	}

 ?>