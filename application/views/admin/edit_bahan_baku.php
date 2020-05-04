<div class="container-fluid">
	<h3> <i class="fas fa-edit"></i> EDIT DATA BAHAN BAKU</h3>
	<?php foreach($bahan as $bhn): ?>
		<form action="<?php echo base_url(). 'admin/pesan_bahan_baku/update'?>" method="post">
			<div class="form-group">
				<label>Nama Bahan</label>
				<input type="text" name="nama_bahan" class="form-control" value="<?php echo $bhn->nama_bahan?>">
			</div>
			<div class="form-group">
				<label>Stok Bahan</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $bhn->id?>">
				<input type="text" name="stok_bahan" class="form-control" value="<?php echo $bhn->stok_bahan?>">
			</div>
			<div class="form-group">
				<label>Pesan Bahan</label>
				<input type="text" name="jum_pesan" class="form-control" value="<?php echo $bhn->jum_pesan?>">
			</div>
			<div class="form-group">
				<label>Harga Bahan</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $bhn->harga?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</form>
	<?php endforeach;?>
</div>
