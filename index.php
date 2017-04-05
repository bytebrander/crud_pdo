<?php 
include "db.php";

$result ="SELECT * FROM datasiswa";
$data = $link->query($result);
$data->execute();
// ambil data
$result = $data->fetchAll();

 ?>

 <html>
	 <head>
	 	<title></title>
	 </head>
	 <body>
	 	<h2>DATA SISWA</h2>	
	 	<h4>Tahun Ajaran 2010/2011</h4>
	 	<a href="tambah.php">Tambah Data</a>
	 	<table border="1">
	 		<tr>
	 			<td>input</td>
	 			<td>Nama</td>
	 			<td>Kelas</td>
	 			<td>Jurusan</td>
	 			<td>Jenis Kelamin</td>
	 			<td>Alamat</td>
	 			<td>Opsi</td>
	 		</tr>

	 		<?php 
	 		foreach ($result as $key => $value) {
	 		 ?>
			<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['nama']; ?></td>
				<td><?php echo $value['kelas']; ?></td>
				<td><?php echo $value['jurusan']; ?></td>
				<td><?php echo $value['jenis_kelamin']; ?></td>
				<td><?php echo $value['alamat']; ?></td>
				<td>
					<a href="edit.php?idTest=<?php echo $value['id']?>">Edit</a>
					<a href="hapus.php?idTest=<?php echo $value['id']?>">Hapus</a>
				</td>
			</tr>
	 		 <?php } ?>
	 	</table>
	 </body>
 </html>