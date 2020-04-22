<div class="container-fluid">
	<h4>Invoice Pemesanan Produk</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<thead class="thead-dark text-center">
				<th>ID Invoice</th>
				<th>Nama Pemesanan</th>
				<th>Alamat Penerima</th>
				<th>Tanggal Pemesanan</th>
				<th>Batas Pembayaran</th>
				<th colspan=2>Aksi</th>
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
				
				<td><?php echo anchor('admin/Invoice/detail/'. $inv->id, '<div class="btn btn-success btn-sm" > <i class="fas fa-search-plus"></i> Detail</div>')?></td>
				<td><?php echo anchor('admin/Invoice/hapus/' .$inv->id, '<div class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Hapus</div>')?></td>
			</tbody>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
