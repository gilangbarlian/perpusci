<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Daftar Anggota</h3>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-striped" id="example1">
							<thead>
								<tr>
									<th>Id Anggota</th>
									<th>Nama Anggota</th>
									<th>Gender</th>
									<th>No Telp</th>
									<th>Alamat</th>
									<th>Email</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($show as $key => $data) {	
								?>
								<tr>
									<td><?=$data->id_anggota;?></td>
									<td><?=$data->nama_anggota;?></td>
									<td><?=$data->gender;?></td>
									<td><?=$data->no_telp;?></td>
									<td><?=$data->alamat;?></td>
									<td><?=$data->email;?></td>
									<td>
										<a href="#" class="btn btn-xs btn-primary">Detail</a>
										<a href="<?=site_url('kategori');?>" class="btn btn-xs btn-warning">Edit</a>
									</td>
								</tr>
								<?php
								}
								?>
							</tbody>
							<tfoot>
								<tr>
									<th>Id Anggota</th>
									<th>Nama Anggota</th>
									<th>Gender</th>
									<th>No Telp</th>
									<th>Alamat</th>
									<th>Email</th>
									<th>Aksi</th>
								</tr>
							</tfoot>

						</table>
						
					</div>
				</div>
			</div>
		</div>
	
</section>