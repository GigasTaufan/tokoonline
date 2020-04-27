<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
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
	header("Content-Disposition: attachment; filename=Data_Barang.xls");
	?>

	<center>
		<h1>Data Barang</h1>
	</center>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Stok</th>
			<th>Harga</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","tokoonline");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tb_barang");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_brg']; ?></td>
			<td><?php echo $d['ket']; ?></td>
			<td><?php echo $d['stok']; ?></td>
			<td><?php echo $d['harga']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>
