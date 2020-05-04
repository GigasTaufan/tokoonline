<!DOCTYPE html>
<html>
<head>
	<title>Data Bahan Baku</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Bahan_Baku.xls");
	?>

	<center>
		<h1>Data Bahan Baku</h1>
	</center>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Bahan</th>
			<th>Stok Bahan</th>
			<th>Jumlah Pesan Bahan Pemesanan</th>
			<th>Harga Bahan</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","tokoonline");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tb_bahan_baku");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_bahan']; ?></td>
			<td><?php echo $d['stok_bahan']; ?></td>
			<td><?php echo $d['jum_pesan']; ?></td>
			<td><?php echo $d['harga']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>
