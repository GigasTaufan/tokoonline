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
        <div class="sidebar-brand-text mx-3">Toko Online</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Nav Item - Elektronik -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dashboard/keranjang_belanja')?>">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Keranjang Belanja</span></a>
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

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

						<div class="navbar">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<?php 
									$keranjang = 'Keranjang Belanja: '.$this->cart->total_items(). ' items'
									?>
									<?php echo anchor('dashboard/detail_keranjang', $keranjang)?>
								</li>
							</ul>

							<div class="topbar-divider d-none d-sm-block"></div>

							<ul class="nav navbar-nav navbar-right">
								<?php if ($this->session->userdata('username')){?>
									<li class="mr-2"><div> <?php echo $this->session->userdata('username')?> </div></li>
									<li><?php echo anchor('auth/logout', 'Logout')?></li>
								<?php } else { ?>
									<li><?php echo anchor('auth/login', 'Login');?></li>
								<?php }?>
							</ul>
						</div>

            

          </ul>

        </nav>
        <!-- End of Topbar -->
