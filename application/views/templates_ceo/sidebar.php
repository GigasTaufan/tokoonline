<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard');?>">
        <div class="sidebar-brand-icon">
          <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CEO-Toko Online</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ceo/Dashboard_ceo');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Elektronik -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ceo/Data_barang');?>">
          <i class="fas fa-fw fa-database"></i>
          <span>Data Barang</span></a>
      </li>
      <!-- Nav Item - Pakaian -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ceo/Invoice');?>">
          <i class="fas fa-fw fa-file-invoice"></i>
          <span>Invoice</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <ul class="navbar-nav ml-auto">
						<!-- Topbar Navbar -->
						<ul class="nav navbar-nav navbar-right">
							<?php if ($this->session->userdata('username')){?>
								<li class="mr-2"><div> <?php echo $this->session->userdata('username')?> </div></li>
								<li><?php echo anchor('auth/logout', 'Logout')?></li>
							<?php } else { ?>
								<li><?php echo anchor('auth/login', 'Login');?></li>
							<?php }?>
						</ul>
					</ul>

        </nav>
        <!-- End of Topbar -->
