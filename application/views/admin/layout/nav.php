<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menupos-fixed menu-light brand-blue">
  <div class="navbar-wrapper  ">
    <div class="navbar-content scroll-div " >
      
      <div class="">
        <div class="main-menu-header">
          <img class="img-radius" src="">

          <div>
            <h5>
              <?php echo $this->session->userdata('nama_petugas'); ?>
            </h5>
            <p><?php echo $this->session->userdata('level'); ?></p>
          </div>
        </div>

        <div class="mt-5">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" title="View Profile"><i class="feather icon-user"></i></a></li>
            <li class="list-inline-item"><a href="<?php echo base_url('login/logout') ?>" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
          </ul>
        </div>

        <div class="collapse" id="nav-user-link">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
            <li class="list-inline-item"><a href="auth-signin.html" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
          </ul>
        </div>
      </div>
      
      <ul class="nav pcoded-inner-navbar ">

        <?php if($this->session->userdata('level') == "Admin"){ ?>
        <li class="nav-item pcoded-menu-caption">
          <label>Navigation</label>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('admin/dasbor') ?>" class="nav-link ">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
          </a>
        </li>
       
        <li class="nav-item pcoded-menu-caption pt-0">
          <label>Data Master</label>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('admin/petugas') ?>" class="nav-link">
            <span class="pcoded-micon"><i class="feather icon-users"></i></span>
            <span class="pcoded-mtext">User</span></a>
        </li>
       
        <li class="nav-item pcoded-hasmenu">
          <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Data</span></a>
          <ul class="pcoded-submenu">
            <li><a href="<?php echo base_url('admin/pelanggan') ?>">pelanggan</a></li>
            <li><a href="<?php echo base_url('admin/paket') ?>">paket</a></li>
            <li><a href="<?php echo base_url('admin/outlet') ?>">outlet</a></li>
            <li><a href="<?php echo base_url('admin/kontak') ?>">feedback</a></li>

          </ul>
        </li>
        
        <li class="nav-item pcoded-hasmenu">
          <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Transaksi</span></a>
          <ul class="pcoded-submenu">
            <li><a href="<?php echo base_url('admin/transaksi') ?>">pembayaran</a></li>
            <li><a href="<?php echo base_url('admin/detail_transaksi') ?>">riwayat pembayaran</a></li>
          </ul>
        </li>
        <li class="nav-item pcoded-hasmenu">
          <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Konfigurasi</span></a>
          <ul class="pcoded-submenu">
            <li><a href="<?php echo base_url('admin/konfigurasi') ?>"> Konfigurasi Umum</a></li>
            <li><a href="<?php echo base_url('admin/konfigurasi/logo') ?>"> Konfigurasi Logo</a></li>
            <li><a href="<?php echo base_url('admin/konfigurasi/icon') ?>"> Konfigurasi Icon</a></li>
          </ul>
        </li>
        <?php } elseif($this->session->userdata('level') == "Petugas"){ ?>
        <li class="nav-item">
          <a href="<?php echo base_url('admin/dasbor') ?>" class="nav-link ">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item pcoded-hasmenu">
          <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Transaksi</span></a>
          <ul class="pcoded-submenu">
            <li><a href="<?php echo base_url('pembayaran') ?>">pembayaran</a></li>
            <li><a href="<?php echo base_url('admin/detail_transaksi') ?>">riwayat pembayaran</a></li>
          </ul>
        </li>
        <?php } elseif($this->session->userdata('level') == "Owner"){ ?>
          <li class="nav-item">
          <a href="<?php echo base_url('admin/dasbor') ?>" class="nav-link ">
            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
            <span class="pcoded-mtext">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item pcoded-hasmenu">
          <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Transaksi</span></a>
          <ul class="pcoded-submenu">
            <li><a href="<?php echo base_url('admin/detail_transaksi') ?>">riwayat pembayaran</a></li>
          </ul>
        </li>
       
        <?php } ?>

      </ul>
    </div>
  </div>
</nav>
<!-- [ navigation menu ] end -->

