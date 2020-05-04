<div class="container-fluid">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="btn btn-success btn-sm">
			<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents()){
					foreach ($keranjang as $item){
						$grand_total = $grand_total + $item['subtotal'];
					}
				echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0,',', '.') . ".-";
				?>
		</div> <br><br>
		<h3>Input Alamat Pengiriman dan Pembayaran</h3>

		<form method="post" action="<?php echo base_url(). 'dashboard/proses_pemesanan'?>">
			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="hidden" name="akun_pemesan" class="form-control" value="<?php echo $akun_pemesan ?>">
				<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
			</div>
			<div class="form-group">
				<label>Alamat Lengkap</label>
				<input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap">
			</div>
			<div class="form-group">
				<label>No Telepon</label>
				<input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon">
			</div>
			<div class="form-group">
				<label>Jasa Pengiriman</label>
				<select class="form-control" name="jasa">
					<option value="JNE">JNE</option>
					<option value="Post_Indonesia">Post Indonesia</option>
					<option value="Tiki">Tiki</option>
				</select>
			</div>
			<div class="form-group">
				<label>Pilih Bank</label>
				<select class="form-control" name="bank">
					<option value="BRI">BRI</option>
					<option value="Mandiri">Mandiri</option>
					<option value="COD">COD</option>
				</select>
			</div>

			<button type="submit" class="btn btn-sm btn-primary">Pesan</button>
		</form>
		<?php 
			}else{
				echo "<h4>Keranjang Anda Masih Kosong";
			}
		?>
	</div>
	<div class="col-md-2"></div>
</div>
