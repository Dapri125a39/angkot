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

	<div class="container pt-5">
    <p class="pt-1">Nama : <?php echo $this->session->userdata('nama');?></p>
		<p class="pt-1">Email : <?php echo $this->session->userdata('email');?></p>
    <p class="pt-1">Status : <?php echo $this->session->userdata('status');?></p>
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