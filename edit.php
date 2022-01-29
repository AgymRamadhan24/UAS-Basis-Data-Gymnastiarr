<html>
<head>
	<title>Data anggota</title>
</head>
<body>
 
	<h3>Data anggota</h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Anggota</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from anggota where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama Anggota</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Tanggal Pendaftaran</td>
					<td><input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
				</tr>
				<tr>
					<td>Umur</td>
					<td><input type="text" name="umur" value="<?php echo $d['umur']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>