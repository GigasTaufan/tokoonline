<div class="container-fluid">
	<div class="row">
		<h3>Daftar Pesanan Bahan Baku</h3>
	</div>
	<div class="row">
		<a href="<?php echo base_url('ceo/pesan_bahan_baku/export');?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>
	<div class="row">
		<table class="table table-bordered mt-3">
			<thead class="thead-dark text-center">
				<tr>
					<th>NO</th>
					<th>NAMA BAHAN</th>
					<th>STOK BAHAN</th>
					<th>JUMLAH PESANAN BAHAN</th>
					<th>HARGA</th>
				</tr>
			</thead>
			<tbody>
				<?php $no =1; foreach ($bahan as $bhn): ?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $bhn->nama_bahan;?></td>
						<td><?php echo $bhn->stok_bahan;?></td>
						<td><?php echo $bhn->jum_pesan;?></td>
						<td>Rp. <?php echo number_format($bhn->harga,0,',', '.')?>,-</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
