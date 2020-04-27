<div class="container-fluid">
	<a href="<?php echo base_url('ceo/dashboard_ceo/export');?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mb-3"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

  <!-- Content Row -->
  <div class="row">
    <?php
    $total_pesanan = 0;
    $total_uang = 0;
    foreach ($pesanan as $psn) :

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
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_pesanan; ?></div>
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
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?php echo number_format($total_uang, 0, ',', '.') ?>, -</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php foreach ($barang as $brg) : ?>
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Stok Rak <?php echo $brg->ket ?></div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $brg->stok ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
  <div class="row">

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Perbandingan Pemesanan</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4 pb-2">
            <canvas id="myPieChart"></canvas>
          </div>
          <div class="mt-4 text-center small">
            <span class="mr-2">
              <i class="fas fa-circle text-primary"></i> Small
            </span>
            <span class="mr-2">
              <i class="fas fa-circle text-success"></i> Large
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
