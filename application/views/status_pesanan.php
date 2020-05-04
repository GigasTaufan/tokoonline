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
				<th>Pembayaran</th>
				<th>Jasa Pengiriman</th>
				<th>Detail</th>
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
				<td class="text-center"><?php echo $inv->pilihan_bank?></td>
				<td><?php echo $inv->pilihan_jasa?></td>
				<td><?php echo anchor('dashboard/detail_pesanan/'. $inv->id, '<div class="btn btn-success btn-sm" > <i class="fas fa-search-plus"></i> Detail</div>')?></td>
			</tbody>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>
</div>
