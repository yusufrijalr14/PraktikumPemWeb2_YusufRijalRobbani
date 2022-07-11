<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" href="<?=base_url('assets');?>/css/home.css">
	<title>SITAPO | Home</title>
</head>

<body>
	<main>
		<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
			<div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                <?php foreach ($array_tempat_wisata as $tempat_wisata): ?>
				<div class="col">
					<div class="card h-100 shadow-sm"> <img
							src="<?=base_url('assets/uploads/' . $tempat_wisata->foto1);?>"
							class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-center my-4"><?php echo $tempat_wisata->nama ?></h5>
							<div class="text-center my-5"> <a href="<?=site_url("detail-wisata/" . $tempat_wisata->id);?>" class="btn btn-warning">Detail</a></div>
						</div>
					</div>
				</div>
                <?php endforeach; ?>
			</div>
		</div>
	</main>


	<!-- JavaScript Bundle with Popper -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
	</script> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
