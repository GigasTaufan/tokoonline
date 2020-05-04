<div class="container-fluid">
	<div class="row">
		<h3>Daftar Pesanan Bahan Baku</h3>
	</div>
	<div class="row">
		<button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#tambahbahanbaku"> <i class="fa fa-plus fa-sm"></i> Tambah Bahan Baku</button>
		<a href="<?php echo base_url('admin/pesan_bahan_baku/export');?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
					<th colspan=2>AKSI</th>
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
						<td><?php echo anchor('admin/pesan_bahan_baku/edit/' .$bhn->id, '<div class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> Edit</div>')?></td>
						<td><?php echo anchor('admin/pesan_bahan_baku/hapus/' .$bhn->id, '<div class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Hapus</div>')?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal Tambah Barang-->
<div class="modal fade" id="tambahbahanbaku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Bahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form action="<?php echo base_url(). 'admin/pesan_bahan_baku/tambah_aksi'?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Bahan</label>
					<input type="text" name="nama_bahan" class="form-control">
				</div>
				<div class="form-group">
					<label>Stok Bahan</label>
					<input type="text" name="stok_bahan" class="form-control">
				</div>
				<div class="form-group">
					<label>Jumlah Pesan Bahan</label>
					<input type="text" name="jum_pesan" class="form-control">
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="text" name="harga" class="form-control">
				</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Simpan</button>	
		</div>
	  </form>
    </div>
  </div>
</div>
