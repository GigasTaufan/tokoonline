<div class="container-fluid">
	<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahbarang"> <i class="fa fa-plus fa-sm"></i> Tambah Barang</button>
	<a href="<?php echo base_url('admin/data_barang/export');?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	<table class="table table-bordered mt-3">
		<thead class="thead-dark text-center">
			<tr>
				<th>NO</th>
				<th>Nama Barang</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>Stok</th>
				<th colspan="3">Aksi</th>
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
					<td><?php echo anchor('admin/data_barang/detail/' .$brg->id_brg, '<div class="btn btn-success btn-sm" > <i class="fas fa-search-plus"></i> Detail</div>')?></td>
					<td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i> Edit</div>')?></td>
					<td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Hapus</div>')?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>

<!-- Modal Tambah Barang-->
<div class="modal fade" id="tambahbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi'?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Barang</label>
					<input type="text" name="nama_brg" class="form-control">
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<input type="text" name="ket" class="form-control">
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="text" name="harga" class="form-control">
				</div>
				<div class="form-group">
					<label>Stok</label>
					<input type="text" name="stok" class="form-control">
				</div>
				<div class="form-group">
					<label>Gambar Produk</label>
					<input type="file" name="gambar" class="form-control">
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
