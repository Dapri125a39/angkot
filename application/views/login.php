<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <style type="text/css">
      .bg{
        background-color: #ffd9b3;
      }
    </style>

    <title><?php echo $judul; ?></title>
  </head>
  <body class="bg">

    <div class="container">

      <div class="row">
        <div class="col pt-md-3">
          <h2 class="text-center font-weight-bold">Cari Rute Angkutan Wilayah Kota Bogor</h2>
        </div>
      </div>

      <hr>

      <div class="row text-center mb-md-4">
        <div class="col">
          <img src="<?php echo base_url('assets/img/logo_angkot.png') ?>" alt="gambar angkot" class="img-fluid" style="width: 300px; height: 160px;">
        </div>
      </div>

      <?php echo $this->session->flashdata('gagal_login'); ?>

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form action="<?php echo base_url('index.php/masuk/aksi_masuk'); ?>" method="post">
            <div class="form-group">
              <label for="id">Email</label>
              <input type="text" name="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
              <label for="sandi">Kata Sandi</label>
              <input type="password" name="sandi" class="form-control" placeholder="Kata Sandi">
            </div>
        </div>
        <div class="col-md-3"></div>
      </div>

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
          <a href="<?php echo base_url('index.php/daftar') ?>" class="btn btn-link">Daftar Akun</a>
        </div>
        <div class="col-md-3">
          <!-- <div class="float-right"> -->
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          <!-- </div> -->
        </div>
        </form>
        <div class="col-md-3"></div>
      </div>

    </div>

    <div class="fixed-bottom">
      <footer id="footer">
        <div class="container-fluid bg-dark text-light text-center py-md-1">
          <p class="font-weight-light">CopyRight 2018 | Angkot</p>
        </div>
      </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?> "></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  </body>
</html>