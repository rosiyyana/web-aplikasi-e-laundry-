<!-- Title Page -->

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: linear-gradient(to bottom right, #0a043c, #51adcf, #0a043c);">
	<div class="border p-4">
	<?php 
		echo validation_errors('<div class="alert alert-warning">', '</div>');
		// form open
		// echo form_open(base_url('kontak'), 'class="leave-comment"'); ?>
		<h2 class="l-text2 t-center" style="font-family: 'Roboto';">
			<?php echo $title ?>
		</h2>
		<p class="m-text13 t-center" style="font-family: 'Roboto';">
			<?php echo $site->namaweb ?> | <?php echo $site->tagline ?>
		</p>
	</div>	
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 p-b-30">
				<div class="p-r-20 p-r-0-lg">
					<div class="contact-map size21" id="google_map" data-map-x="37.4419" data-map-y="-122.1419" data-pin="assets/template/images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
				</div>
			</div>
			<div class="col-md-6 p-b-30">

					<?php echo form_open(base_url('kontak/tambah'),' class="leave-comment"');?>

					<h4 class="m-text26 p-b-36 p-t-15">
						Send us your message
					</h4>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name" value="<?php echo set_value('name') ?>">
					</div>

					<div class="bo4 of-hidden size15 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="no_tlp" placeholder="No. Telepone" value="<?php echo set_value('no_tlp') ?>">
					</div>
					
					<div class="bo4 of-hidden size20 m-b-20">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="message" placeholder="Message" value="<?php echo set_value('message') ?>">
					</div>

					<div class="w-size25">
						<!-- Button -->
						<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-5" name="submit" type="submit">
							 Send
						</button>
					</div>
				<?php echo form_close(); ?>
				<img src="<?php echo base_url();?>assets/image/image4.png" alt="" style="width:600px;margin-left:-650px;margin-top:-460px;">

			</div>
		</div>
	</div>
</section>