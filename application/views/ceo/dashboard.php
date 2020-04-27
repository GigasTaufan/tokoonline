<div class="container-fluid">
<!-- Content Row -->
          <div class="row">
					<?php
						$total_pesanan = 0;
						$total_uang = 0;
						foreach($pesanan as $psn):

							$total_pesanan = $psn->jumlah + $total_pesanan;
							$subtotal_uang = $psn->jumlah * $psn->harga;
							$total_uang += $subtotal_uang;
						?>
					<?php endforeach; ?>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Barang Pesanan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_pesanan;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Uang Pesanan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?php echo number_format($total_uang,0,',', '.')?>, -</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>

<div class="row">
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
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
