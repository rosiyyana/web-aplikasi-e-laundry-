<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
			<div class="leftbar p-r-20 p-r-0-sm">
				<!--  -->
				<?php include('menu.php') ?>
			</div>
		</div>

		<div class="text-white col-sm-6 col-md-8 col-lg-9 p-b-50">
			<!-- Product -->

				<div class="alert alert-dark">
					<h4>Selamat Datang <i><strong><?php echo $this->session->userdata('nama_pelanggan'); ?></strong></i></h4>
				</div>

				<p class="alert alert-success">
					<i class="fa fa-warning"></i> Belum ada data transaksi
				</p>
				<!-- <div class="float-right">			
					<iframe width="360" height="200" src="https://www.youtube.com/embed/H8UFPV0Wd2o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div> -->
				
				<div class="card-group">
					<div class="card">
						<img src="<?php echo base_url(); ?>assets/image/pre_washing.jpg">
						<div class="card-body">
						<p class="card-text"><b>PRE WASHING</b><br> 
						The process of choosing stained clothing (due to dirt, sweat, etc.) or the initial stain removal process.</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">Proccesing Time 1 day</small>
					</div>
					</div>
					<div class="card">
						<img src="<?php echo base_url(); ?>assets/image/washing.jpg">
						<div class="card-body">
						<p class="card-text"><b>WASHING</b><br>
						washing process using detergent and washing machine.</p>
						</div>
					<div class="card-footer">
						<small class="text-muted">Proccesing Time 1 day</small>
					</div>
					</div>
					<div class="card">
						<img src="<?php echo base_url(); ?>assets/image/rinsing.jpg">
						<div class="card-body">
						<p class="card-text"><b>RINSING</b><br>
						the process of removing chemical residues and dirt from the laundry.</p>
						</div>
					<div class="card-footer">
						<small class="text-muted">Proccesing Time 1 day</small>
					</div>
					</div>
				</div>
				<br>
				<div class="card-group">
					<div class="card">
						<img src="<?php echo base_url(); ?>assets/image/extractor.jpg">
						<div class="card-body">
						<p class="card-text"><b>EXTRACTOR</b><br> 
						squeezing machine with a centrifugal system, namely by rotating / spinning at a high speed of up to 1,500 RPM, so that it is able to squeeze or reduce the moisture content in the laundry maximally before the drying process.</p>
					</div>
					<div class="card-footer">
						<small class="text-muted">Proccesing Time 1 day</small>
					</div>
					</div>
					<div class="card">
						<img src="<?php echo base_url(); ?>assets/image/drying.jpg">
						<div class="card-body">
						<p class="card-text"><b>DRYING</b><br>
						the process of mass transfer of water or other solvents from a solid or semi-solid substance by using evaporation.</p>
						</div>
					<div class="card-footer">
						<small class="text-muted">Proccesing Time 1 day</small>
					</div>
					</div>
					<div class="card">
						<img src="<?php echo base_url(); ?>assets/image/pressing.jpg">
						<div class="card-body">
						<p class="card-text"><b>PRESSING</b><br>
						the ironing or ironing process, so that dry clothes are neat and not wrinkled due to the washing process.</p>
						</div>
					<div class="card-footer">
						<small class="text-muted">Proccesing Time 1 day</small>
					</div>
					</div>
				</div>	
		</div>
	</div>
</div>
</section>
