<div class="container">
	<div class="row my-2">
		<div class="col-lg my-2 py-2 header-title">
			<h3><i class="fas fa-fw fa-share-square"></i> Daftar Pemasukkan</h3>
		</div>

		<div class="col-lg my-2 py-2 header-button">
			<a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahPemasukkanModal"><i class="fas fa-fw fa-plus"></i> Tambah</a>
			<!-- Modal -->
			<div class="modal fade" id="tambahPemasukkanModal" tabindex="-1" aria-labelledby="tambahPemasukkanModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <form action="<?= base_url('pemasukkan/addPemasukkan'); ?>" method="post">
			    	<div class="modal-content text-left">
				      <div class="modal-header">
				        <h5 class="modal-title" id="tambahPemasukkanModalLabel"><i class="fas fa-fw fa-share-square"></i><sup><i class="fas fa-1x fa-plus"></i></sup> Tambah Pemasukkan</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<div class="form-group">
				      		<label for="id_menu">Menu</label>
				      		<select name="id_menu" onchange="menu()" class="form-control" id="id_menu" required>
                                <option value=" ">- Pilih -</option>     
                                <?php
                                    foreach ($menu as $row):
                                ?>
                                    <option value="<?= $row['id_menu'] ?>"><?= $row['nama_menu'] ?></option>
                                <?php
                                    endforeach;
                                ?>
                            </select>
				      	</div>
				      	<div class="form-group">
				      		<label for="harga_beli">Harga Beli</label>
				      		<input type="number" name="harga_beli" id="harga_beli" class="form-control" placeholder="Masukkan harga beli" required>
				      	</div>
                        <div class="form-group">
				      		<label for="harga_jual">Harga Jual</label>
				      		<input type="number" name="harga_jual" id="harga_jual" class="form-control" placeholder="Masukkan harga Jual" readonly>
				      	</div>
                        <div class="form-group">
				      		<label for="jumlah">Jumlah</label>
				      		<input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan jumlah" required>
				      	</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Batal</button>
				        <button type="submit" class="btn btn-success"><i class="fas fa-fw fa-save"></i> Simpan</button>
				      </div>
				    </div>
			    </form>
			  </div>
			</div>
		</div>
	</div>
	<div class="row my-2">
		<div class="col-lg">
			<div class="table-responsive">
				<table class="text-center table table-bordered table-hover table-striped" id="table_id">
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
							<th>Aksi</th>
						</tr>
					</thead>
					<tbdody>
						<?php $i = 1; ?>
						<?php foreach ($pemasukkan as $dpe): ?>
							<tr>
								<td><?= $i++; ?></td>
								<td class="text-left"><?= $dpe['nama_menu'] ?></td>
								<td class="text-left">Rp. <?= number_format($dpe['harga_beli']); ?></td>
								<td class="text-left">Rp. <?= number_format($dpe['harga_jual']); ?></td>
								<td class="text-left"><?= $dpe['jumlah'] ?></td>
								<td class="text-left">Rp. <?= number_format($dpe['laba_kotor']); ?></td>
								<td class="text-left">Rp. <?= number_format($dpe['laba_bersih']); ?></td>
								<td class="text-left"><?= date('Y-m-d, H:i:s', $dpe['tanggal_pemasukkan']); ?></td>
								<td>
									<a class="btn m-1 btn-info" href="" data-toggle="modal" data-target="#ubahpemasukkanModal<?= $dpe['id_pemasukkan']; ?>"><i class="fas fa-fw fa-edit"></i> Ubah</a>
									<!-- Modal -->
									<div class="modal fade" id="ubahpemasukkanModal<?= $dpe['id_pemasukkan']; ?>" tabindex="-1" aria-labelledby="ubahpemasukkanModalLabel<?= $dpe['id_pemasukkan']; ?>" aria-hidden="true">
									  <div class="modal-dialog">
									    <form action="<?= base_url('pemasukkan/editPemasukkan/' . $dpe['id_pemasukkan']); ?>" method="post">
									    	<div class="modal-content text-left">
										      <div class="modal-header">
										        <h5 class="modal-title" id="ubahpemasukkanModalLabel<?= $dpe['id_pemasukkan']; ?>"><i class="fas fa-fw fa-share-square"></i><sup><i class="fas fa-1x fa-edit"></i></sup> Ubah Pemasukkan</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										      	<div class="form-group">
										      		<label for="id_menu<?= $dpe['id_pemasukkan']; ?>">Menu</label>
                                                    <select name="id_menu" onchange="menu()" class="form-control" id="id_menu<?= $dpe['id_pemasukkan'] ?>">
                                                        <option value=" ">- Pilih -</option>
                                                        <?php
                                                            foreach ($menu as $row):
                                                        ?>
                                                            <option value="<?= $row['id_menu'] ?>" <?php if($row['id_menu']==$dpe['id_menu']) echo 'selected'; ?>><?= $row['nama_menu'] ?></option>
                                                        <?php
                                                            endforeach;
                                                        ?>
                                                    </select>
										      	</div>
										      	<div class="form-group">
                                                    <label for="harga_beli">Harga Beli</label>
                                                    <input type="number" name="harga_beli" id="harga_beli" class="form-control" placeholder="Masukkan harga beli" value="<?= $dpe['harga_beli'] ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga_jual">Harga Jual</label>
                                                    <input type="number" name="harga_jual" id="harga_jual" class="form-control" placeholder="Masukkan harga Jual" value="<?= $dpe['harga_jual'] ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jumlah">Jumlah</label>
                                                    <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan jumlah" value="<?= $dpe['jumlah'] ?>" required>
                                                </div>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-fw fa-times"></i> Batal</button>
										        <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
										      </div>
										    </div>
									    </form>
									  </div>
									</div>
									<?php if ($dataUser['jabatan'] == 'administrator'): ?>
										<a class="btn m-1 btn-danger btn-delete" data-name="Rp. <?= $dpe['nama_menu']; ?>" href="<?= base_url('pemasukkan/deletepemasukkan/' . $dpe['id_pemasukkan']); ?>"><i class="fas fa-fw fa-trash"></i> Hapus</a>
									<?php endif ?>
								</td>
							</tr>
						<?php endforeach ?>
					</tbdody>
				</table>
			</div>
		</div>
	</div>
</div>