<p>
	<a href="<?php echo base_url('admin/outlet/tambah') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
	<a href="<?= base_url('admin/outlet/export') ?>" class="btn btn-primary" target="_blank">Export</a>
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
				<th>Alamat</th>
				<th>No.Telepon</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($outlet as $outlet) { ?>
			<tr>
				<td>
					<div class="d-inline-block align-middle">
						<div class="d-inline-block"><h6 class="m-b-0"><?php echo $outlet->nama_outlet ?></h6></div>
					</div>
				</td>
				<td><?php echo $outlet->alamat ?></td>
				<td><?php echo $outlet->telp ?></td>
				<td>
					<div class="overlay-edit">
						<a href="<?php echo base_url('admin/outlet/edit/'.$outlet->id_outlet) ?>" class="btn btn-icon btn-warning"><i class="feather icon-edit"></i></a>
						<!-- <a href="<?= base_url('admin/outlet/export') ?>" class="btn btn-primary" target="_blank">Export</a> -->
						<?php include('delete.php') ?>
					</div>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>
