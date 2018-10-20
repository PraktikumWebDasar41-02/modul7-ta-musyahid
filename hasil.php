<?php 

include 'koneksi.php';

echo "Hai, selamat datang";

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Data Mahasiswa</h1>

	<!-- Form pencarian -->
	<form action="hasil.php" method="get">
		<label>Cari : </label>
		<input type="text" name="cari" placeholder="Cari berdasarkan nama">
		<input type="submit" name="pencarian" value="CARI">
	</form>

	<?php 
		if (isset($_GET["pencarian"])) {
			$cari = $_GET["cari"];
			echo "Hasil Pencarian anda : ".$cari."";
		}

	 ?>

	<br><br>
	<a href="tambahdata.php">TAMBAH DATA</a>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Hobi</th>
			<th>fakultas</th>
			<th>Alamat</th>
			<th>Moto Hidup</th>
			<th colspan="2">AKSI</th>
		</tr>

		<?php 
			if (isset($_GET["pencarian"])) {
				$cari = $_GET["cari"];
				$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mhs WHERE nama like '%".$cari."%'"); 
			} else {
				 $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mhs");
			}

			 while ($row = mysqli_fetch_assoc($mahasiswa)) :
		 ?>

 
    	<tr align="center">
      		<td><?= $row["nama"]; ?></td>
      		<td><?= $row["nim"]; ?></td>
      		<td><?= $row["tgl_lahir"]; ?></td>
      		<td><?= $row["jenis_kelamin"]; ?></td>
      		<td><?= $row["hobi"]; ?></td>
      		<td><?= $row["fakultas"]; ?></td>
      		<td><?= $row["alamat"]; ?></td>
      		<td><?= $row["moto"]; ?></td>
      		<td>
      	<a href="edit.php?nim=<?= $row["nim"]; ?>">EDIT</a> |
      	<a href="hapus.php?nim=<?= $row["nim"]; ?>"onclick="return confirm('Apakah anda yakin?')">HAPUS</a>
      </td>
    </tr>

    <?php endwhile; ?>
	</table>


</body>
</html>


