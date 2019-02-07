<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Form Data Kelas</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Form Data Kelas</h3>
	</div>
	<form class="form-horizontal" method="POST" id="barang_form" action="<?php echo base_url().'Admin_System/edit_kelas_add'; ?>">
		<input type="hidden" name="id_kelas" value="<?php echo $data_kelas->id_kelas ?>">
		<div class="panel-body">
			<!-- <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
					<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
					<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div> -->

			<!--				-------------------------------------------------------------------------------------------------------->
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Id kelas</label>
				<div class="col-md-2 col-xs-12">
					<input type="number" class="form-control" value="<?php echo $data_kelas->id_kelas ?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Kelas</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="kelas" class="form-control" value="<?php echo $data_kelas->kelas ?>" required>
				</div>
			</div>

		</div>
		<div class="panel-footer text-right">
			<button class="btn btn-default" type="reset">Reset</button>
			<button class="btn btn-primary" type="submit">Simpan</button>
		</div>
	</form>
</div>
