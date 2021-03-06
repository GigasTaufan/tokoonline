<div class="container-fluid">
	<a href="<?php echo base_url('ceo/data_barang/export');?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

	<table class="table table-bordered mt-3">
		<thead class="thead-dark text-center">
			<tr>
				<th>NO</th>
				<th>Nama Barang</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no =1; foreach ($barang as $brg): ?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $brg->nama_brg;?></td>
					<td><?php echo $brg->ket;?></td>
					<td><?php echo $brg->harga;?></td>
					<td><?php echo $brg->stok;?></td>
					<td><?php echo anchor('ceo/data_barang/detail/' .$brg->id_brg, '<div class="btn btn-success btn-sm" > <i class="fas fa-search-plus"></i> Detail</div>')?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
