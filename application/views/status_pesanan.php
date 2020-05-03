<div class="container-fluid">
	<div class="row">
		<h3>Status Pesanan</h3>
	</div>
	<div class="row">
		<table class="table table-bordered table-hover table-striped">
		<tr>
			<thead class="thead-dark text-center">
				<th>ID Invoice</th>
				<th>Nama Pemesanan</th>
				<th>Akun Pemesan</th>
				<th>Alamat Penerima</th>
				<th>Tanggal Pemesanan</th>
				<th>Batas Pembayaran</th>
				<th>Status</th>
			</thead>
		</tr>
		<?php foreach($invoice as $inv):?>
		<tr>
			<tbody>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->akun_pemesan?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php echo $inv->status?></td>
			</tbody>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>
</div>
