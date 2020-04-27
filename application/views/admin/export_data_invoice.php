<!DOCTYPE html>
<html>
<head>
	<title>Data Invoice</title>
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
	header("Content-Disposition: attachment; filename=Data_Invoice.xls");
	?>

	<center>
		<h1>Data Invoice</h1>
	</center>

	<table border="1">
		<tr>
			<th>No</th>
			<th>ID Invoice</th>
			<th>Nama Pemesanan</th>
			<th>Alamat Penerima</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","tokoonline");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tb_invoice");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['tgl_pesan']; ?></td>
			<td><?php echo $d['batas_bayar']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>
