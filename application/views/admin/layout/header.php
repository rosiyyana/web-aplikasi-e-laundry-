  <!-- [ Header ] start -->
  <!-- <style>
    .navbar,.m-header{
      background-image: linear-gradient(to right, red , yellow);
    }
  </style> -->
  <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">  
    <div class="m-header">
      <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
      <a href="#!" class="b-brand">
        <!-- ========   change your logo hear   ============ -->
        
        <!-- <img src="<?php echo base_url() ?>assets/admin2/ableproadmin.com/bootstrap/default/assets/images/logo.png" alt="" class="logo">
        <img src="<?php echo base_url() ?>assets/admin2/ableproadmin.com/bootstrap/default/assets/images/logo-icon.png" alt="" class="logo-thumb"> -->
        <h4 class="appname text-light pt-3" style="font-family: Monaco;">E-LAUNDRY</h5>
      </a>
      <a href="#!" class="mob-toggler">
        <i class="feather icon-more-vertical"></i>
      </a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
          <div class="search-bar">
            <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li>
          <div class="dropdown drp-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="feather icon-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-notification">
              <ul class="pro-body">
                <li><a href="<?php echo base_url('login/logout') ?>" title="Logout" class="dropdown-item"><i class="feather icon-power"></i>Logout</a></li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>   
  </header>
  <!-- [ Header ] end -->