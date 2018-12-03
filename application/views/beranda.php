<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <style type="text/css">
    	.ul-tombol{
    		list-style: none;
    		display: inline-block;
    	}
    	.tombol{
    		display: inline-block;
    		border: 1px solid black;
    		border-radius: 0px;
    		padding: 10px 100px;
    	}
    </style>

    <title><?php echo $judul; ?></title>
	</head>
	<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		  <a class="navbar-brand" href="#">Angkot</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu_atas" aria-controls="menu_atas" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="menu_atas">
		    <ul class="navbar-nav mx-auto">
		      <li class="nav-item">
		        <a class="nav-link mx-md-5 px-md-5" href="<?php echo base_url('index.php/beranda'); ?>">Beranda</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link mx-md-5 px-md-5" href="<?php echo base_url('index.php/beranda/profil'); ?>">Profil</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link mx-md-5 px-md-5" href="<?php echo base_url('index.php/beranda/logout'); ?>">Keluar</a>
		      </li>
		    </ul>
			</div>
		</div>
	</nav>

	<!-- <?php echo $this->session->userdata('nama'); ?>
  <?php echo $this->session->userdata('email'); ?>
  <?php echo $this->session->userdata('status'); ?> -->

	<div class="container">
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-6">
				<div class="float-left">
					<p>
						<span class="font-weight-light">
							00:00 wib
						</span>
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="float-right">
					<p>
						<span class="font-weight-light">
						
							<script type="text/javascript">
								var date = new Date();
								var hari = date.getDay();
								var hariArray = Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
								
								var tahun = date.getYear();
								if (tahun < 1000){
									tahun += 1900
								}

								var tanggal = date.getDate();
								if (tanggal < 10) {
									tanggal = "0"+ tanggal;
								}

								var bulan = date.getMonth();
								var bulanArray = Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

								document.write(""+hariArray[hari]+","+tanggal+"-"+bulanArray[bulan]+"-"+tahun);

							</script>
						</span>
					</p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<img src="<?php echo base_url('assets/img/logo_angkot.png') ?>" alt="gambar angkot" class="img-fluid" style="width: 300px; height: 160px; margin-top: 40px;">
		</div>

		<div class="row justify-content-center" style="margin-top: 30px;">
			<a href="<?php echo base_url('index.php/beranda/pencarian'); ?>" class="btn btn-outline-success" style="width: 310px;">Pencarian Trayek</a>
		</div>
	</div>

  <div class="fixed-bottom">
    <footer id="footer">
      <div class="container-fluid bg-dark text-light text-center py-md-1">
        <p class="font-weight-light" style="font-size: 25px;">ANGKUTAN KOTA BOGOR</p>
      </div>
    </footer>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <p class="text-center">CopyRight 2018 | Angkot</p>
    </nav> -->
  </div>























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?> "></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	</body>
</html>