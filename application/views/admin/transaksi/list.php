<p>
	<a href="<?php echo base_url('admin/transaksi/tambah') ?>" class="btn btn-success">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
	<a href="<?= base_url('admin/transaksi/export') ?>" class="btn btn-primary" target="_blank">Export</a>

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
				<th>Nama Paket</th>
				<th>Kode Invoice</th>
				<th>Tanggal</th>
                <th>Batas Waktu</th>
                <th>Tanggal Bayar</th>
				<th>Biaya Tambahan</th>
				<th>Pajak</th>
				<th>Status</th>
                <th>Dibayar</th>
                <th>Nama Pelanggan</th>
				<th>Harga</th>
				<?php if($this->session->userdata('level') == "Admin"){ ?>
				<th>Action</th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($transaksi as $transaksi) { ?>
			<tr>
				<td>
					<div class="d-inline-block align-middle">
						<div class="d-inline-block">
							<h6 class="m-b-0"><?php echo $transaksi->nama_outlet ?></h6>
						</div>
					</div>
				</td>
				<td>
					<div class="d-inline-block align-middle">
						<div class="d-inline-block">
							<h6 class="m-b-0"><?php echo $transaksi->nama_paket ?></h6>
						</div>
					</div>
				</td>
				<td><?php echo $transaksi->kode_invoice ?></td>
				<td><?php echo $transaksi->tgl ?></td>
                <td><?php echo $transaksi->batas_waktu ?></td>
                <td><?php echo $transaksi->tgl_bayar ?></td>
				<td><?php echo $transaksi->biaya_tambahan ?></td>
                <td><?php echo $transaksi->pajak ?></td>
                <td><?php echo $transaksi->status ?></td>
                <td><?php echo $transaksi->dibayar ?></td>
                <td>
					<div class="d-inline-block align-middle">
						<div class="d-inline-block">
							<h6 class="m-b-0"><?php echo $transaksi->nama_pelanggan ?></h6>
						</div>
					</div>
				</td>
				<td>
					<div class="d-inline-block align-middle">
						<div class="d-inline-block">
							<h6 class="m-b-0"><?php echo $transaksi->harga ?></h6>
						</div>
					</div>
				</td>
					<div class="overlay-edit">
						<td>
						<?php if($this->session->userdata('level') == "Admin"){ ?>
						<a href="<?php echo base_url('admin/transaksi/edit/'.$transaksi->id_transaksi) ?>" class="btn btn-icon btn-warning"><i class="feather icon-edit"></i></a>
						
						<a href="<?php echo base_url('admin/transaksi/delete/'.$transaksi->id_transaksi) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash-o"></i>Delete</a>	
						<?php }?>
						</td>
					</div>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>