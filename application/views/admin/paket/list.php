

<p>
	<a href="<?php echo base_url('admin/paket/tambah') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
	<a href="<?= base_url('admin/paket/export') ?>" class="btn btn-primary" target="_blank">Export</a>

	
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
				<th>Nama Outlet</th>
				<th>Jenis Paket</th>
				<th>Nama Paket</th>
                <th>Harga</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($paket as $paket) { ?>
			<tr>
				<td>
					<div class="d-inline-block align-middle">
						<div class="d-inline-block">
							<h6 class="m-b-0"><?php echo $paket->nama_outlet ?></h6>
						</div>
					</div>
				</td>
				<td><?php echo $paket->jenis_paket ?></td>
				<td><?php echo $paket->nama_paket ?></td>
                <td><?php echo $paket->harga ?></td>
				<td>
					<div class="overlay-edit">
						<a href="<?php echo base_url('admin/paket/edit/'.$paket->id_paket) ?>" class="btn btn-icon btn-warning"><i class="feather icon-edit"></i></a>
						<a href="<?php echo base_url('admin/paket/delete/'.$paket->id_paket)?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash-o"></i>Delete</a>	
					</div>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>