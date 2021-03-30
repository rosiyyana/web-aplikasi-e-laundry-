<?php 
// load data menu dari konfigurasi
?>
<div class="wrap_header">
	<!-- Logo -->
	<a href="<?php echo base_url() ?>" class="logo">
		<img src="<?php echo base_url('assets/upload/image/'.$site->logo) ?>" alt="<?php echo $site->namaweb ?> | <?php echo $site->tagline ?>" style="max-height: 45px;">
	</a>

	<!-- Menu -->
	<div class="wrap_menu">
		<nav class="menu">
			<ul class="main_menu">

				<!-- menu home -->
				<li>
					<a href="<?php echo base_url() ?>" id="about">Dashboard</a>
				</li>

				<!-- menu produk -->
				<li>
					<a href="<?php echo base_url('dasbor') ?>">Laundry Payment</a>
				</li>

				<li>
					<a href="<?php echo base_url('kontak') ?>">Contact</a>
				</li>
			</ul>
		</nav>
	</div>

	<!-- Header Icon -->
	<div class="header-icons">

		<?php if ($this->session->userdata('email')) { ?>
			<a href="<?php echo base_url('dasbor') ?>" class="header-wrapicon1 dis-block">
				<img src="<?php echo base_url() ?>assets/template/images//icons/icon-header-01.png" class="header-icon1 pr-1 pb-1" alt="ICON"><?php echo $this->session->userdata('nama_pelanggan'); ?>&nbsp;&nbsp;
			</a>
			<a href="<?php echo base_url('masuk/logout') ?>" class="header-wrapicon1 dis-block">
				<i class="fa fa-sign-out"></i> Logout
			</a>
		<?php }else{ ?>
			<a href="<?php echo base_url('masuk') ?>" class="header-wrapicon1 dis-block">
				<img src="<?php echo base_url() ?>assets/template/images//icons/icon-header-01.png" class="header-icon1" alt="ICON">
			</a>
		<?php } ?>
	</div>
</div>
</div>

<!-- Header Mobile -->
<div class="wrap_header_mobile">
<!-- Logo moblie -->
<a href="index.html" class="logo-mobile">
	<img src="<?php echo base_url('assets/upload/image/'.$site->logo) ?>" alt="<?php echo $site->namaweb ?> | <?php echo $site->tagline ?>" style="max-height: 45px;">
</a>

<!-- Button show menu -->
<div class="btn-show-menu">
	<!-- Header Icon mobile -->
	<div class="header-icons-mobile">
		<a href="#" class="header-wrapicon1 dis-block">
			<img src="<?php echo base_url() ?>assets/template/images//icons/icon-header-01.png" class="header-icon1" alt="ICON">
		</a>
	</div>

	<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
	</div>
</div>
</div>

<!-- Menu Mobile -->
<div class="wrap-side-menu" >
<nav class="side-menu">
	<ul class="main-menu">
		<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
			<span class="topbar-child1">
				<?php echo $site->alamat ?>
			</span>
		</li>

		<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
			<div class="topbar-child2-mobile">
				<span class="topbar-email">
					<?php echo $site->email ?>
				</span>

				<div class="topbar-language rs1-select2">
					<select class="selection-1" name="time">
						<option><?php echo $site->telepon ?></option>
						<option><?php echo $site->email ?></option>
					</select>
				</div>
			</div>
		</li>

		<li class="item-topbar-mobile p-l-10">
			<div class="topbar-social-mobile">
				<a href="<?php echo $site->facebook ?>" class="topbar-social-item fa fa-facebook"></a>
				<a href="<?php echo $site->instagram ?>" class="topbar-social-item fa fa-instagram"></a>
			</div>
		</li>

		<!-- menu mobile homepage -->
		<li class="item-menu-mobile">
			<a href="<?php echo base_url() ?>">Beranda</a>
		</li>

		<!-- menu mobile produk -->
		<li class="item-menu-mobile">
			<a href="<?php echo base_url('produk') ?>">Produk &amp; Belanja</a>
			<ul class="sub-menu">
				<li></li>
			</ul>
			<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
		</li>

		<!-- menu contact mobile -->
		<li class="item-menu-mobile">
			<a href="<?php echo base_url('kontak') ?>">Contact</a>
		</li>
	</ul>
</nav>
</div>
</header>
