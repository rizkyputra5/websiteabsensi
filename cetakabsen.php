<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN ABSEN</title>
</head>
<body>
 
	<center>
 
		<h1>LAPORAN ABSEN</h1>
		<h3>CV RADAR TEKNOLOGI KOMPUTER</h3>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
  <div class="container">
	<table border ="3" style="width: 100%">
		<tr>
			<th >No</th>
			<th>nip</th>
			<th>Nama</th>
			<th >waktu</th>
		</tr>
    </div>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from tb_absen");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['id_karyawan']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['waktu']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>