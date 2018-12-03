<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <title><?php echo $judul; ?></title>
  </head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<h3 class="text-center">Rute Trayek</h3>
	</nav>

	<div class="container" style="margin-top: 40px;">
		<div class="row">
			<div class="col-md-7">
				<form>
					<div class="form-group">
						<label for="no_mobil">Nomor Mobil</label>
						<input type="text" name="no_mobil" value="<?php echo $no_mobil;?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="warna">Warna</label>
						<input type="text" name="warna" value="<?php echo $warna;?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="tarif">Tarif</label>
						<input type="text" name="tarif" value="Rp. <?php echo $tarif;?>" class="form-control">
					</div>
				</form>
				<div class="card p-2">
					<div class="card-header text-center">
						Rute
					</div>
					<img src="<?php echo $rutes;?>" class="img-fluid">
				</div>

				<div class="pt-2 float-right">
					<nav aria-label="Page navigation example">
					  <ul class="pagination">
					    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item"><a class="page-link" href="#">Next</a></li>
					  </ul>
					</nav>
				</div>

			</div>

			<div class="col-md-5 text-center" style="width: 100%; height: 320px; border: 1px solid black;">
				<img src="<?php echo base_url('assets/img/logo_angkot.png') ?>" alt="gambar angkot" class="img-fluid" style="width: 300px; height: 160px; margin-top: 60px;">
			</div>
		</div>



	</div>

	<!-- <div class="fixed-bottom"> -->
    <footer id="footer" style="margin-top: 50px;">
      <div class="container-fluid bg-dark text-light text-center py-md-1">
        <p class="font-weight-light" style="font-size: 25px;">ANGKUTAN KOTA BOGOR</p>
      </div>
    </footer>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <p class="text-center">CopyRight 2018 | Angkot</p>
    </nav> -->
  <!-- </div> -->





















		<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?> "></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	</body>
</html>