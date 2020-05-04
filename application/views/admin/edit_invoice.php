<div class="container-fluid">
	<h3> <i class="fas fa-edit"></i> EDIT INVOICE</h3>
	<?php foreach($invoice as $inv): ?>
		<form action="<?php echo base_url(). 'admin/invoice/update'?>" method="post">
			<div class="form-group">
				<label>Role</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $inv->id?>">
				<select class="form-control" name="status">
					<option value="DIKIRIM">Dikirim</option>
					<option value="BELUM DIKIRIM">Belum Dikirim</option>
				</select>
			</div>

			<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</form>
	<?php endforeach;?>
</div>
