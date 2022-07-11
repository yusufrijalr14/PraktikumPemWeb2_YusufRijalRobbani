<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SITAPO | Komentar</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/vendor/admin-lte/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet"
		href="<?=base_url('assets');?>/vendor/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/vendor/admin-lte/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="card">
			<div class="card-body login-card-body">
				<form action="<?=site_url("tambah-komentar");?>" method="post">
					<input type="hidden" name="wisata_id" value="<?php echo $wisata_id ?>">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Komentar" name="isi" required>
						<div class="input-group-append">
							<div class="input-group-text">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Nilai Rating</label>
						<select class="form-control" name="nilai_rating_id">
							<?php foreach ($array_nilai_rating as $rating): ?>
							<option value="<?php echo $rating->id ?>"><?php echo $rating->nama ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block">Kirim</button>
						</div>
					</div>
				</form>
			</div>
			<!-- /.login-card-body -->
		</div>
		<br>
		<a href="<?=site_url("logout");?>" class="btn btn-danger btn-block">Logout</a>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('assets');?>/vendor/admin-lte/dist/js/adminlte.min.js"></script>

</body>

</html>
