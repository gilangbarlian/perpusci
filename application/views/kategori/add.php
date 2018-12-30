<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<div class="box box-danger">
				<div class="box-header">
					<h3 class="box-title">Tambah Kategori</h3>
				</div>
				
				<div class="box-body">
					<form action="<?=site_url('kategori/create');?>" method="post" accept-charset="utf-8">
					<div class="box-body">
						<div class="form-group">
										<label>Kategori</label>
										<input type="text" name="nama_kategori" class="form-control" value="" placeholder="Tambahkan nama kategori" required="required">
										
								</div>
								
						<div class="box-footer">
							<button type="button" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Batal</button>
							<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-send"></i> Tambah</button>
							
						</div>
					</div>
					</form>		
				</div>
				</div>
			</div>			
		</div>
</section>