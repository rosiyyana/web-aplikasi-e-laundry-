<p>
	<a href="<?php echo base_url('admin/petugas/tambah') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>

</p>


<div class="dt-responsive table-responsive">
	<?php 
	// notifikasi
		if ($this->session->flashdata('sukses')) {
			echo '<p class="alert alert-success">';
			echo $this->session->flashdata('sukses');
			echo '</div>';
		}
	?>
	<table id="simpletable" class="table nowrap">
		<thead>
			<tr class="border-bottom-primary">
				<th>Nama</th>
				<th>UserName</th> 
				<th>Level</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($petugas as $petugas) { ?>
			<tr>
				<td>
					<div class="d-inline-block align-middle">
						<div class="d-inline-block">
							<h6 class="m-b-0"><?php echo $petugas->nama_petugas ?></h6>
						</div>
					</div>
				</td>
				<td><?php echo $petugas->username ?></td>
				<td><?php echo $petugas->level ?></td>
				<td>
					<div class="overlay-edit">
						<a href="<?php echo base_url('admin/petugas/edit/'.$petugas->id_petugas) ?>" class="btn btn-icon btn-warning"><i class="feather icon-edit"></i></a>
						
						<?php include('delete.php') ?>
					</div>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>