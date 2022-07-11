<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SITAPO | Dashboard</title>

	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	<link rel="stylesheet" href="<?=base_url('assets');?>/vendor/admin-lte/plugins/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet"
		href="<?=base_url('assets');?>/vendor/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

	<link rel="stylesheet"
		href="<?=base_url('assets');?>/vendor/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

	<link rel="stylesheet" href="<?=base_url('assets');?>/vendor/admin-lte/plugins/jqvmap/jqvmap.min.css">

	<link rel="stylesheet" href="<?=base_url('assets');?>/vendor/admin-lte/dist/css/adminlte.min.css?v=3.2.0">

	<link rel="stylesheet"
		href="<?=base_url('assets');?>/vendor/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

	<link rel="stylesheet" href="<?=base_url('assets');?>/vendor/admin-lte/plugins/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" href="<?=base_url('assets');?>/vendor/admin-lte/plugins/summernote/summernote-bs4.min.css">
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
							<a href="<?=site_url();?>administrator/dashboard" class="nav-link active">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=site_url();?>administrator/tempat-wisata" class="nav-link">
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

		<div class="content-wrapper">
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Dashboard</h1>
						</div>
					</div>
				</div>
			</div>
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-6">
							<div class="small-box bg-info">
								<div class="inner">
									<h3><?php echo $count_tempat_wisata ?></h3>
									<p>Tempat Wisata</p>
								</div>
								<a href="<?=site_url();?>administrator/tempat-wisata" class="small-box-footer">Detail<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="small-box bg-success">
								<div class="inner">
									<h3><?php echo $count_jenis_wisata ?></h3>
									<p>Jenis Wisata</p>
								</div>
								<a href="<?=site_url();?>administrator/jenis-wisata" class="small-box-footer">Detail<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="small-box bg-warning">
								<div class="inner">
									<h3><?php echo $count_kecamatan ?></h3>
									<p>Kecamatan</p>
								</div>
								<a href="<?=site_url();?>administrator/kecamatan" class="small-box-footer">Detail<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-6">
							<div class="small-box bg-danger">
								<div class="inner">
									<h3><?php echo $count_pengguna ?></h3>
									<p>Pengguna</p>
								</div>
								<a href="<?=site_url();?>administrator/pengguna" class="small-box-footer">Detail<i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<footer class="main-footer">
			<strong>Copyright &copy; 2022 STT Terpadu Nurul Fikri</strong>
			All rights reserved.
		</footer>
	</div>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/jquery/jquery.min.js"></script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/chart.js/Chart.min.js"></script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/sparklines/sparkline.js"></script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/moment/moment.min.js"></script>
	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>

	<script
		src="<?=base_url('assets');?>/vendor/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
	</script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>

	<script
		src="<?=base_url('assets');?>/vendor/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
	</script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/dist/js/adminlte.js?v=3.2.0"></script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/dist/js/demo.js"></script>

	<script src="<?=base_url('assets');?>/vendor/admin-lte/dist/js/pages/dashboard.js"></script>
</body>

</html>
