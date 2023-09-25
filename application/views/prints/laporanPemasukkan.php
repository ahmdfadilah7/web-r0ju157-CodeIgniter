<style>
	body {
		font-family: monospace;
		font-weight: 600;
		font-size: .9rem;
	}
	@media print {
		.no_print {
			display: none;	
		}
	}
</style>
<a onclick="window.print();" class="no_print btn btn-success"><i class="fas fa-fw fa-print"></i></a> <br><br>
<a href="<?= base_url('laporanPemasukkan'); ?>" class="no_print btn btn-primary"><i class="fas fa-fw fa-arrow-left"></i></a>
<div class="container my-3">
	<div class="row">
		<div class="col">
			<h3>Laporan Pemasukkan At Dymsum Aww</h3>
			<h5>Dari Tanggal <?= $tanggal_awal; ?> Sampai Tanggal <?= $tanggal_akhir; ?></h5>
			<table class="text-center table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Menu</th>
						<th>Harga Beli</th>
						<th>Harga Jual</th>
						<th>Jumlah</th>
						<th>Laba Kotor</th>
						<th>Laba Bersih</th>
						<th>Tanggal Pemasukkan</th>
					</tr>
				</thead>
				<tbdody>
					<?php 
						$i = 1;
						$jumlah_pemasukkan = 0;
					?>
					<?php foreach ($pemasukkan as $dpe): ?>
						<tr>
							<td><?= $i++; ?></td>
							<td class="text-left"><?= $dpe['nama_menu']; ?></td>
							<td class="text-left">Rp. <?= number_format($dpe['harga_beli']); ?></td>
							<td class="text-left">Rp. <?= number_format($dpe['harga_jual']); ?></td>
							<td class="text-left"><?= $dpe['jumlah']; ?></td>
							<td class="text-left">Rp. <?= number_format($dpe['laba_kotor']); ?></td>
							<td class="text-left">Rp. <?= number_format($dpe['laba_bersih']); ?></td>
							<td class="text-left"><?= date('Y-m-d', strtotime($dpe['tanggal_pemasukkan'])); ?></td>
						</tr>
						<?php $jumlah_pemasukkan += $dpe['laba_kotor']; ?>
					<?php endforeach ?>
				</tbdody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col py-4 text-dark bg-primary rounded">
			<h4>Pemasukkan : Rp. <?= number_format($jumlah_pemasukkan); ?></h4>
		</div>
	</div>
</div>
<script>
	window.print();
</script>