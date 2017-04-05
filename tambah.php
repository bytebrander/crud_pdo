<!DOCTYPE html>
 <html>
	 <head>
	 	<title></title>
	 </head>
	<body>
		<h2>Tambah Data</h2>
		<a href="index.php">Beranda</a>
		<form action="" method="post">
			<table><br>
				<tr>
					<td>Nama: </td>
					<td><input type="text" name="nama" required></td>
				</tr>
				<tr>
					<td>Kelas: </td>
					<td>
						<select name="kelas">
							<option value="pilih kelas">Pilih Kelas</option>
							<option value="X">X</option>
							<option value="XI">XI</option>
							<option value="XII">XII</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jurusan: </td>
					<td>
						<select name="jurusan">
							<option value="pilih jurusan">Pilih Jurusan</option>
							<option value="teknik komputer dan jaringan">Teknik Komputer dan Jaringan</option>
							<option value="teknik mesin">Teknik Mesin</option>
							<option value="kimia analisis">Kimia Analisis</option>
							<option value="kimia industri">Kimia Industri</option>
							<option value="otomotif">Otomotif</option>
							<option value="farmasi">Farmasi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin: </td>
					<td>
						<select name="jenis_kelamin">
							<option value="laki-laki">Laki-laki</option>
							<option value="perempuan">Perempuan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Alamat: </td>
					<td><textarea name="alamat" cols="20" rows="5" required></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
 	</body>
 </html>

 <?php

include "db.php"; 

if (isset($_POST['submit'])) {
	if (is_numeric($_POST['nama'])) {
		echo "Maaf, nama harus berkarakter huruf";
	} elseif (is_null($_POST['nama'])) {
       echo "nama tidak boleh kosong";
      } 
	 else {
		echo $nama = htmlentities($_POST['nama']);
	}
	$kelas = htmlentities($_POST['kelas']);
	$jurusan = htmlentities($_POST['jurusan']);
	$jenisklm = htmlentities($_POST['jenis_kelamin']);
	$alamat = htmlentities($_POST['alamat']);


		$result = "INSERT INTO datasiswa VALUES (:id, :nama, :kelas, :jurusan, :jenis_kelamin, :alamat)";
		$data = $link->prepare($result);

		$data->bindParam(':id', $id_siswa);
		$data->bindParam(':nama', $nama);
		$data->bindParam(':kelas', $kelas);
		$data->bindParam(':jurusan', $jurusan);
		$data->bindParam(':jenis_kelamin', $jenisklm);
		$data->bindParam(':alamat', $alamat);

		if ($data->execute()) {
			header("location:index.php");
		} else {
			echo "Something Error";
		}
}
  ?>