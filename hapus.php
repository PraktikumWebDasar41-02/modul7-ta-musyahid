<?php 

include 'koneksi.php';

$nim = $_GET["nim"]; 

$hapus = mysqli_query($koneksi, "DELETE FROM mhs WHERE nim='$nim'"); 

if (mysqli_affected_rows($koneksi) > 0) { 
	echo "<script>
	alert('Data berhasil dihapus');
	document.location.href = 'hasil.php'; 
	</script>"; 
} else {
	echo "<script>
	alert('Data gagal dihapus');
	document.location.href = 'hasil.php';
	</script>"; 
}

 ?>