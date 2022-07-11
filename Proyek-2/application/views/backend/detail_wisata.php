<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SITAPO | Detail <?php echo $detail_wisata->nama ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/vendor/admin-lte/plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/vendor/admin-lte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="fas fa-search"></i>
					</a>
					<div class="navbar-search-block">
						<form class="form-inline">
							<div class="input-group input-group-sm">
								<input class="form-control form-control-navbar" type="search" placeholder="Search"
									aria-label="Search">
								<div class="input-group-append">
									<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<button class="btn btn-navbar" type="button" data-widget="navbar-search">
										<i class="fas fa-times"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
			</ul>
		</nav>

		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="<?=site_url();?>administrator/dashboard" class="brand-link">
				<img src="<?=base_url('assets');?>/vendor/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
					class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">SITAPO</span>
			</a>
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?=base_url('assets');?>/vendor/admin-lte/dist/img/user2-160x160.jpg"
							class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?php echo $current_user->username ?></a>
					</div>
				</div>
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search"
							aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<li class="nav-item">
							<a href="<?=site_url();?>administrator/dashboard" class="nav-link">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=site_url();?>administrator/tempat-wisata" class="nav-link active">
								<i class="nav-icon far fa-image"></i>
								<p>
									Tempat Wisata
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=site_url();?>administrator/jenis-wisata" class="nav-link">
								<i class="nav-icon far fa-image"></i>
								<p>
									Jenis Wisata
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=site_url();?>administrator/kecamatan" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Kecamatan
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=site_url();?>administrator/pengguna" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									Pengguna
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=site_url();?>administrator/logout" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1>Detail <?php echo $detail_wisata->nama ?></h1>
						</div>
						<div class="col-sm-6 text-right">
							<a class="btn btn-secondary btn-sm" href="<?=site_url();?>administrator/tempat-wisata">
								<i class="fas fa-folder">
								</i>
								Kembali
							</a>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">

				<!-- Default box -->
				<div class="card">
					<div class="card-body table-responsive p-0">
						<table class="table table-hover text-nowrap">
							<tbody>
								<tr>
									<td>
										Nama
									</td>
									<td>
										<?php echo $detail_wisata->nama ?>
									</td>
								</tr>
								<tr>
									<td>
										Alamat
									</td>
									<td>
										<?php echo $detail_wisata->alamat ?>
									</td>
								</tr>
								<tr>
									<td>
										Kecamatan
									</td>
									<td>
										<?php echo $kecamatan->nama ?>
									</td>
								</tr>
								<tr>
									<td>
										Latitude & Longitude
									</td>
									<td>
										<?php echo $detail_wisata->latlong ?>
									</td>
								</tr>
								<tr>
									<td>
										Jenis
									</td>
									<td>
										<?php echo $jenis_wisata->nama ?>
									</td>
								</tr>
								<tr>
									<td>
										Skor Rating
									</td>
									<td>
										<?php echo $detail_wisata->skor_rating ?>
									</td>
								</tr>
								<tr>
									<td>
										Harga Tiket
									</td>
									<td>
										Rp <?php echo $detail_wisata->harga_tiket ?>
									</td>
								</tr>
								<tr>
									<td>
										Website
									</td>
									<td>
										<?php echo $detail_wisata->website ?>
									</td>
								</tr>
								<tr>
									<td>
										Fasilitas
									</td>
									<td>
										<?php echo $detail_wisata->fasilitas ?>
									</td>
								</tr>
								<tr>
									<td>
										Foto 1
									</td>
									<td>
										<img width="200" height="200"
											src="<?=base_url('assets/uploads/' . $detail_wisata->foto1);?>"
											alt="foto 1">
									</td>
								</tr>
								<tr>
									<td>
										Foto 2
									</td>
									<td>
										<img width="200" height="200"
											src="<?=base_url('assets/uploads/' . $detail_wisata->foto2);?>"
											alt="foto 2">
									</td>
								</tr>
								<tr>
									<td>
										Foto 3
									</td>
									<td>
										<img width="200" height="200"
											src="<?=base_url('assets/uploads/' . $detail_wisata->foto3);?>"
											alt="foto 3">
									</td>
								</tr>
								<tr>
									<td>
										Komentar
									</td>
									<td>
										<?php foreach ($komentar as $k): ?>
										<?php echo ucfirst($k->username) ?> / <?php echo $k->tanggal ?>
                                        <br>
                                        <b>(<?php echo $k->nama ?>)</b> <?php echo $k->isi ?>
                                        <br>
                                        <br>
										<?php endforeach; ?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<strong>Copyright &copy; 2022 STT Terpadu Nurul Fikri</strong>
			All rights reserved.
		</footer>
	</div>

	<!-- jQuery -->
	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('assets');?>/vendor/admin-lte/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?=base_url('assets');?>/vendor/admin-lte/dist/js/demo.js"></script>
</body>

</html>
