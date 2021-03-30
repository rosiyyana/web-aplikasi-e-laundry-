<div class="dt-responsive table-responsive">
	<table id="simpletable" class="table nowrap">
		<thead>
			<tr class="border-bottom-primary">
				<th>Nama</th>
				<th>No Telepon</th>
				<th>Pesan</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($kontak as $kontak) { ?>
			<tr>
				<td>
					<div class="d-inline-block align-middle">
						<div class="d-inline-block">
							<h6 class="m-b-0"><?php echo $kontak->name ?></h6>
						</div>
					</div>
				</td>
				<td><?php echo $kontak->no_tlp ?></td>
				<td><?php echo $kontak->message ?></td>
				<td>
				<a href="<?php echo base_url('kontak/delete/'.$kontak->id_kontak)?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash-o"></i>Delete</a>	
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>