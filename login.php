<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td><input type="submit" name="login"></td>
		</tr>
	</table>
	</form>
</body>
</html>


<?php 

include 'koneksi.php';

if (isset($_POST["login"])) {
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];



	$query = mysqli_query($koneksi, "SELECT * from mhs where nama='$nama' and nim='$nim'");

	if(mysqli_num_rows($query) === 1){ 
		header("location:hasil.php");
	}else{
	 echo "<script>
			alert('Gagal Login');
		</script>";	
	}
}



?>

