<div class="container-fluid">
	<h4>Invoice Pemesanan Produk</h4>

	<a href="<?php echo base_url('ceo/invoice/export');?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mb-3"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<thead class="thead-dark text-center">
				<th>ID Invoice</th>
				<th>Nama Pemesanan</th>
				<th>Alamat Penerima</th>
				<th>Tanggal Pemesanan</th>
				<th>Batas Pembayaran</th>
				<th>Aksi</th>
			</thead>
		</tr>
		<?php foreach($invoice as $inv):?>
		<tr>
			<tbody>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php echo anchor('ceo/Invoice/detail/'. $inv->id, '<div class="btn btn-success btn-sm" > <i class="fas fa-search-plus"></i> Detail</div>')?></td>
			</tbody>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
