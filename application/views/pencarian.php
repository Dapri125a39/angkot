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
		<h3 class="text-center">Pencarian Trayek</h3>
	</nav>

	<div class="container">
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-6">
				<div class="float-left">
					<p>
						<span class="font-weight-light">
							<script type="text/javascript">								
								var waktu = new Date();
								var jam = waktu.getHours();
								var menit = waktu.getMinutes();

								document.write(""+jam+":"+menit+" WIB");
							</script>
						</span>
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="float-right">
					<p><span class="font-weight-light">
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
					</span></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-7">
				<p class="text-center">Mau Kemana Anda Hari Ini ?</p>
				<form>
					<div class="form-group">
						<label for="berangkat">Berangkat</label>
						<select class="form-control" id="berangkat">
							<option>Cilebut</option>
							<option>Dramaga</option>
							<option>Bojong</option>
							<option>Bogor</option>
							<option>Pajajaran</option>
							<option>Ciomas</option>
							<option>Pandu Raya</option>
							<option>Parung</option>
							<option>Salabenda</option>
							<option>Tajur</option>
							<option>Baranangsiang</option>
							<option>Ciheuleut</option>
							<option>Cimahpar</option>
							<option>Tanah Baru</option>
							<option>Merdeka</option>
							<option>Pasar Anyar</option>
							<option>Dramaga</option>
							<option>Cilendek</option>
							<option>Semplak</option>
							<option>Bantar Kambing</option>
							<option>Leuwiliang</option>
							<option>Bogor</option>
						</select>
					</div>
					<div class="form-group">
						<label for="tujuan">Tujuan</label>
						<select class="form-control" id="tujuan">
							<option>Cilebut</option>
							<option>Dramaga</option>
							<option>Bojong</option>
							<option>Bogor</option>
							<option>Pajajaran</option>
							<option>Ciomas</option>
							<option>Pandu Raya</option>
							<option>Parung</option>
							<option>Salabenda</option>
							<option>Tajur</option>
							<option>Baranangsiang</option>
							<option>Ciheuleut</option>
							<option>Cimahpar</option>
							<option>Tanah Baru</option>
							<option>Merdeka</option>
							<option>Pasar Anyar</option>
							<option>Dramaga</option>
							<option>Cilendek</option>
							<option>Semplak</option>
							<option>Bantar Kambing</option>
							<option>Leuwiliang</option>
							<option>Bogor</option>
						</select>
					</div>
					<a href="<?php echo base_url('index.php/beranda/rute'); ?>" type="button" class="btn btn-outline-success btn-block">OK</a>
				</form>

			</div>
			<div class="col-md-5 text-center" style="width: 100%; height: 320px; border: 1px solid black;">
				<img src="<?php echo base_url('assets/img/logo_angkot.png') ?>" alt="gambar angkot" class="img-fluid" style="width: 300px; height: 160px; margin-top: 60px;">
			</div>
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