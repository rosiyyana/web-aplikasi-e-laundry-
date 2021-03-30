<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-3 col-lg-3 p-b-50">
			<div class="leftbar p-r-20 p-r-0-sm">
				<!--  -->
				<?php include('menu.php') ?>
			</div>
		</div>

		<div class="col-sm-6 col-md-9 col-lg-9 p-b-50">
			<!-- Product -->				
				<h1><?php echo $title ?></h1>
				<hr>	
				<p>Berikut adalah riwayat pemayaran laundry kamu</p>

				<?php 
				// jika terdapat transaksi makam muncul tabelnya 
				if ($transaksi) { 
				?>
				<table class="table table-bordered" width="100%">	
					<thead>
						<tr class="bg-dark">
							<th class="text-center text-light">No</th>
							<th class="text-center text-light">Nama Pelanggan</th>
							<th class="text-center text-light">ID Outlet</th>
							<th class="text-center text-light">ID Paket</th>
							<th class="text-center text-light">Kode</th>
							<th class="text-center text-light">Jumlah</th>
							<th class="text-center text-light">Status Bayar</th>
							<th class="text-center text-light">Tanggal Transaksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach ($transaksi as $transaksi) { ?>
						<tr>
							<td><?php echo $i ?></td>
							<td><?php echo $transaksi->nama_pelanggan ?></td>
							<td><?php echo $transaksi->id_outlet ?></td>
							<td class="text-center"><?php echo $transaksi->id_paket ?></td>
							<td><?php echo $transaksi->kode_transaksi ?></td>
							<td><?php echo number_format($transaksi->jumlah) ?></td>
							<td><?php echo $transaksi->status_bayar ?></td>
							<td><?php echo date('d-m-Y',strtotime($transaksi->tanggal_transaksi)) ?></td>
						</tr>
						<?php $i++; } ?>
					</tbody>
				</table>

				<?php 
				// jika tidak ada munculkan notifikasi
				}else{ ?>

					<p class="alert alert-dark">
						<i class="fa fa-warning"></i> Belum ada data transaksi
					</p>

				<?php } ?>
		</div>
	</div>
</div>
</section>
