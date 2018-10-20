<?php  

include 'koneksi.php';

$nim = $_GET["nim"];

$data = mysqli_query($koneksi, "SELECT * FROM mhs WHERE nim=$nim"); 
$ambildata = mysqli_fetch_array($data);
$hobi = explode(', ', $ambildata["hobi"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form method="post" action="update.php">
			<tr>
				<td>NAMA : </td>
				<td><input type="text" name="nama" value="<?php echo $ambildata['nama'];  ?>"></td>
			</tr>
			<tr>
			
				<td>NIM : </td>
				<td><input type="text" name="nim" value="<?php echo $ambildata['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir : </td>
				<td><input type="date" name="tgl_lahir" value="<?php echo $ambildata['tgl_lahir'] ?>"></td>
			</tr>
			<tr>
				
			</tr>
	
			<tr>
				<td>Jenis Kelamin : </td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo $ambildata["jenis_kelamin"] == "Laki-Laki" ? "checked" : ""; ?>>Laki Laki
					<input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo $ambildata["jenis_kelamin"]== "Perempuan" ? "checked" : ""; ?>>Perempuan
				</td>
			</tr>

				<tr>
				<td>Hobi : </td>
				<td>
					<input type="checkbox" name="hobi[]" value="BULU TANGKIS"  <?php in_array('BULU TANGKIS',$hobi) ? print 'checked' : ' ' ?>>BULU TANGKIS
					<input type="checkbox" name="hobi[]" value="SEPAKBOLA" <?php in_array('SEPAKBOLA',$hobi) ? print 'checked' : ' ' ?>>SEPAKBOLA
					<input type="checkbox" name="hobi[]" value="BOLA VOLI" <?php in_array('BOLA VOLI',$hobi) ? print 'checked' : ' ' ?>>BOLA VOLI
				</td>
			</tr>
			
			<tr>
				<td>FAKULTAS</td>
				<td>
					<select name="fakultas">
						<option></option>
						<option value="FAKULTAS ILMU TERAPAN" <?php echo $ambildata["fakultas"] == "FAKULTAS ILMU TERAPAN" ? "selected='selected'" : ""; ?>>FAKULTAS ILMU TERAPAN</option>
						<option value="FAKULTAS INFORMATIKA" <?php echo $ambildata["fakultas"] == "FAKULTAS INFORMATIKA" ? "selected='selected'" : ""; ?>>FAKULTAS INFORMATIKA</option>
						<option value="FAKULTAS TEKNIK ELEKTRO" <?php echo $ambildata["fakultas"] == "FAKULTAS TEKNIK ELEKTRO" ? "selected='selected'" : ""; ?>>FAKULTAS TEKNIK ELEKTRO</option>
						<option value="FAKULTAS REKAYASA INDUSTRI" <?php echo $ambildata["fakultas"] == "FAKULTAS REKAYASA INDUSTRI" ? "selected='selected'" : ""; ?>>FAKULTAS REKAYASA INDUSTRI</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>ALAMAT</td>
				<td><input type="text" name="alamat" value="<?php echo $ambildata["alamat"]; ?>"></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td><textarea name="moto"><?php echo $ambildata["moto"]; ?></textarea></td>
			</tr>
			<tr>
				<td><button type="submit" name="update">UPDATE DATA</button></td>
			</tr>
			
		</form>
	</table>
	</body>
</html>


