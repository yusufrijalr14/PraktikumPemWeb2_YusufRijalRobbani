<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>SITAPO | Detail Wisata</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div id="carouselExampleIndicators" class="carousel slide col-4" data-bs-ride="true"
				style="background-color: lightgrey;">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
						class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
						aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
						aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?=base_url('assets/uploads/' . $detail_wisata->foto1);?>" class="d-block w-100"
							alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?=base_url('assets/uploads/' . $detail_wisata->foto2);?>" class="d-block w-100"
							alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?=base_url('assets/uploads/' . $detail_wisata->foto3);?>" class="d-block w-100"
							alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
					data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
					data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
			<div class="col-8" style="background-color: lightgrey;">
				<table class="table table-hover">
					<tr>
						<td>Nama</td>
						<td><?php echo $detail_wisata->nama ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><?php echo $detail_wisata->alamat ?></td>
					</tr>
					<tr>
						<td>Kecamatan</td>
						<td><?php echo $kecamatan->nama ?></td>
					</tr>
					<tr>
						<td>Latitude & Longitude</td>
						<td><?php echo $detail_wisata->latlong ?></td>
					</tr>
					<tr>
						<td>Jenis</td>
						<td><?php echo $jenis_wisata->nama ?></td>
					</tr>
					<tr>
						<td>Skor Rating</td>
						<td><?php echo $detail_wisata->skor_rating ?></td>
					</tr>
					<tr>
						<td>Harga Tiket</td>
						<td>Rp <?php echo $detail_wisata->harga_tiket ?></td>
					</tr>
					<tr>
						<td>Website</td>
						<td><?php echo $detail_wisata->website ?></td>
					</tr>
					<tr>
						<td>Fasilitas</td>
						<td><?php echo $detail_wisata->fasilitas ?></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row mt-5">
			<div class="d-grid gap-2 d-md-block text-center">
				<a href="<?=site_url("/");?>" class="btn btn-primary" type="button">Kembali</a>
				<a href="<?=site_url("register/" . $detail_wisata->id);?>" class="btn btn-primary" type="button">Login / Register</a>
			</div>
		</div>
	</div>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
	</script>
</body>

</html>
