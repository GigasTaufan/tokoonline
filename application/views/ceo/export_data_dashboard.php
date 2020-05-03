<!DOCTYPE html>
<html>
<head>
	<title>Data Dashboard</title>
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
	header("Content-Disposition: attachment; filename=Data_Dashboard.xls");
	?>

	<center>
		<h1>Data Dashboard</h1>
	</center>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Total Barang Pesanan</th>
			<th>Total Uang Pesanan</th>
			<th>Stok Large</th>
			<th>Stok Small</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","tokoonline");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tb_barang");
		$data1 = mysqli_query($koneksi,"select * from tb_pesanan");

		$large = mysqli_query($koneksi,"select * from tb_barang where ket='LARGE'");
		$lg = mysqli_fetch_array($large);

		$small = mysqli_query($koneksi,"select * from tb_barang where ket='SMALL'");
		$sm = mysqli_fetch_array($small);
		
		$no = 1;
		$total_uang = 0;
		foreach ($pesanan as $psn) :

		$subtotal_uang = $psn->jumlah * $psn->harga;
		$total_uang += $subtotal_uang;
			
		?>
		<?php endforeach; ?>

		<?php
			$total_pesanan = 0;
			foreach ($invoice as $inv) :
				$total_pesanan = 1 + $total_pesanan;
		?>
		<?php endforeach; ?>

		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $total_pesanan ?></td>
			<td><?php echo $total_uang ?></td>
			<td><?php echo $lg['stok'] ?></td>
			<td><?php echo $sm['stok'] ?></td>
		</tr>
	</table>

</body>
</html>

