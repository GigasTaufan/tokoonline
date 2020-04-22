<div class="container-fluid">
	<div class="row text-center">
		<?php foreach ($barang as $brg) :?>
			<div class="card mr-5" style="width: 18rem;">
				<img src="<?php echo base_url().'/uploads/'. $brg->gambar?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $brg->nama_brg?></h5>
					<small>Ukuran: <?php echo $brg->ket?></small>
					<br>
					<small>Stok Tersedia: <?php echo $brg->stok?></small>
					<br>
					<span class="badge badge-pill badge-success">Rp. <?php echo number_format($brg->harga, 0,',','.')?>.-</span>
					<br>
					<!-- <a href="#" class="btn btn-primary">Order</a> -->
					<?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-primary btn-sm">Tambah ke Keranjang</div>')?>
					<?php echo anchor('dashboard/detail/'.$brg->id_brg, '<div class="btn btn-success btn-sm">Detail</div>')?>
					<!-- <a href="#" class="btn btn-success">Detail</a> -->
				</div>
			</div>
		<?php endforeach;?>
	</div>
</div>
