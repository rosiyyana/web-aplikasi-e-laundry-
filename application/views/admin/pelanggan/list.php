<p>
	<a href="<?php echo base_url('admin/pelanggan/tambah') ?>" class="btn btn-success">
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
				<th>Email</th>
                <th>No.Telepon</th>
                <th>Alamat</th>
				<th>Level</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pelanggan as $pelanggan) { ?>
			<tr>
				<td>
					<div class="d-inline-block align-middle">
						<div class="d-inline-block">
							<h6 class="m-b-0"><?php echo $pelanggan->nama_pelanggan ?></h6>
						</div>
					</div>
				</td>
				<td><?php echo $pelanggan->email ?></td>
                <td><?php echo $pelanggan->telepon ?></td>
				<td><?php echo $pelanggan->alamat ?></td>               
				<td><?php echo $pelanggan->level ?></td>
				<td>
					<div class="overlay-edit">
						<a href="<?php echo base_url('admin/pelanggan/edit/'.$pelanggan->id_pelanggan) ?>" class="btn btn-icon btn-warning"><i class="feather icon-edit"></i></a>
						
						<?php include('delete.php') ?>
					</div>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>