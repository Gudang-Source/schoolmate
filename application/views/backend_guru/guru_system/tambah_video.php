<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Form Data Video</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>

<!-- START DEFAULT DATATABLE -->
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Form Data Video</h3>
	</div>
	<form class="form-horizontal" method="POST" id="barang_form" action="<?php echo base_url().'Guru_System/tambah_video_add'; ?>" enctype="multipart/form-data">
		<div class="panel-body">
			<input type="hidden" name="tgl_video" value="<?php echo date('Y-m-d'); ?>">
			<?php foreach ($data_video as $a) {
    ?>		<input type="hidden" name="id_pengajar" value="<?php echo $a->id_pengajar ?>"><?php
} ?>

			<!-- <div class="alert alert-success hidden"><strong>Berhasil! </strong><span></span></div>
					<div class="alert alert-warning hidden"><strong>Memproses! </strong><span>Mohon tunggu, system sedang bekerja.</span></div>
					<div class="alert alert-danger hidden"><strong>Gagal! </strong><span></span></div> -->

			<!--				-------------------------------------------------------------------------------------------------------->

			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Nama</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="nama" value="<?php echo $session_userdata['nama']; ?>" class="form-control" readonly>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Judul Video</label>
				<div class="col-md-2 col-xs-12">
					<input type="text" name="judul_video" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 col-xs-12 control-label">Isi Video</label>
				<div class="col-md-2 col-xs-12">
					<input type="file" name="isi_video" required>
				</div>
			</div>


		<div class="panel-footer text-right">
			<button class="btn btn-default" type="reset">Reset</button>
			<button class="btn btn-primary" type="submit">Simpan</button>
		</div>

	</form>
</div>
