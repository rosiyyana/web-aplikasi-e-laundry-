<!-- Cart -->
<section class="bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<div class="pos-relative">
			<div class="p-b-25" style="text-align: left;">
				<a href="<?php echo base_url('dasbor') ?>" class="btn btn-dark active" role="button" aria-pressed="true"><i class="fa fa-arrow-left text-light" aria-hidden="true"></i>  Kembali</a>
			</div>
			<div class="bgwhite">
				<h1><?php echo $title ?></h1>
				<hr>
				<div class="clearfix pb-3 ml-1"><strong> Lakukan Pembayaran Laundry</strong></div>

				<?php if ($this->session->flashdata('sukses')) {
					echo '<div class="alert alert-warning">';
					echo $this->session->flashdata('sukses');
					echo '</div>';
				} ?>

				<div class="col-md-12">
					<?php 
					// Display eror
					echo validation_errors('<div class="alert alert-warning">', '</div>');
					// form open
					echo form_open(base_url('pembayaran'), 'class="leave-comment"');
					?>
					<table class="table">
						<tbody>
							<tr>
								<td>Nama</td>
								<td><input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama" value="<?php echo $this->session->userdata('nama_pelanggan'); ?>" required></td>
							</tr>
							<tr>
								<td>Outlet</td>
								<td><input type="text" name="id_outlet" class="form-control" placeholder="id outlet" value="<?php echo $this->session->userdata('id_outlet'); ?>" required></td>
							</tr>
							<tr>
								<td>Paket</td>
								<td><input type="text" name="id_paket" class="form-control" placeholder="id paket" value="<?php echo $this->session->userdata('id_paket'); ?>" required></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $this->session->userdata('email'); ?>" required></td>
							</tr>
							<tr>
								<td>Telepon</td>
								<td><input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $this->session->userdata('telepon'); ?>" required></td>
							</tr>
							<tr>
								<td>Jenis Paket</td>
								<td>
									<div class="form-group">
	                                    <select class="form-control form-control-sm" name="jenis_paket">
	                                        <option value="">Pilih Paket</option>
	                                        <option value="Paket A (1 kg)">1kg (Rp.120000)</option>
	                                        <option value="Paket B (1 lusin)">1 lusin (Rp.60000)</option>
	                                    </select>
	                                </div>
								</td>
							</tr>
							
							<tr>
								<td>Jumlah Pembayaran</td>
								<td><input type="text" name="jumlah" class="form-control" placeholder="Jumlah" value="<?php echo set_value('jumlah') ?>" required></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<button class="btn btn-dark" type="submit">
										<i class="fa fa-save"></i> Submit
									</button>
									<button class="btn btn-secondary" type="reset">
										<i class="fa fa-times"></i> Reset
									</button>
								</td>
							</tr>
						</tbody>
					</table>


					<?php echo form_close(); ?>
				</div>

			</div>
		</div>
	</div>
</section>