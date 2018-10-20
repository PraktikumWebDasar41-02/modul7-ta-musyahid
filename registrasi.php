<?php  

include 'koneksi.php';

if (isset($_POST["kirim"])) {
	
	$nama = $_POST["nama"];
	$nim = $_POST["nim"];
	$tgl_lahir = $_POST["tgl_lahir"];
	$jenis_kelamin = $_POST["jenis_kelamin"];
	$hobi = $_POST["hobi"]; 
	$fakultas = $_POST["fakultas"];
	$alamat = $_POST ["alamat"];
	$moto = $_POST["moto"];


	$simpan =  mysqli_query($koneksi, "INSERT INTO mhs VALUES('$nama', '$nim', '$tgl_lahir','$jenis_kelamin','$hobi','$fakultas','$alamat','$moto')");

	if ($simpan) {
		echo "<script>
			alert('Data Berhasil Disimpan');
			document.location.href = 'login.php';
		</script>";
	} else {
		echo "Gagal";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
	<h2>REGISTRASI MAHASISWA</h2>
	<table>
		<form method="post" >
			<tr>
				<td>NAMA : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir : </td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				
			</tr>
			<tr>
				<td>KELAS</td>
				<td>
					<input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01
				<input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02
				<input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03
				<input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin : </td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki Laki
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
				</td>
			</tr>

				<tr>
				<td>Hobi : </td>
				<td>
					<input type="checkbox" name="hobi" value="BULU TANGKIS">BULU TANGKIS
					<input type="checkbox" name="hobi" value="SEPAKBOLA">SEPAKBOLA
					<input type="checkbox" name="hobi" value="BOLA">BOLA VOLI
				</td>
			</tr>
			
			<tr>
				<td>FAKULTAS</td>
				<td>
					<select name="fakultas">
						<option></option>
						<option value="FAKULTAS ILMU TERAPAN">FAKULTAS ILMU TERAPAN</option>
						<option value="FAKULTAS INFORMATIKA">FAKULTAS INFORMATIKA</option>
						<option value="FAKULTAS TEKNIK ELEKTRO">FAKULTAS TEKNIK ELEKTRO</option>
						<option value="FAKULTAS REKAYASA INDUSTRI">FAKULTAS REKAYASA INDUSTRI</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>ALAMAT</td>
				<td><input type="textarea" name="alamat"></td>
			</tr>
			<tr>
				<td>MOTO HIDUP</td>
				<td><textarea name="moto"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim"></td>
			</tr>
			
		</form>
	</table><br><br>


	
</body>
</html>


