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
        <div class="col">
          <h2 class="text-center font-weight-bold">Form Pendaftaran Akun</h2>
        </div>
      </div>

      <?php echo $this->session->flashdata('ada'); ?>

      <div class="row p-md-4">
        <div class="col-md-8">
          <form action="<?php echo base_url('index.php/daftar/input_simpan'); ?>" method="post">
            <div class="form-group">
              <label for="nama">Nama Pengguna</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna" required="required">
            </div>
            <div class="form-group">
              <label for="nama">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
              <label for="sandi">Kata Sandi</label>
              <input type="password" name="sandi" class="form-control" placeholder="Kata Sandi" required="required">
            </div>
            <div class="float-right">
              <button type="submit" class="btn btn-primary" style="width: 200px;">Daftar</button>
            </div>
          </form>
          <!-- <div class="float-right">
            <a class="btn btn-primary" type="submit" style="width: 200px;" href="">Daftar</a>
          </div> -->
        </div>
        <div class="col-md-4 p-md-3">
          <img src="<?php echo base_url('assets/img/logo_angkot.png') ?>" alt="gambar angkot" class="img-fluid" style="width: 300px; height: 160px;">
          <p class="h2 text-center text-uppercase py-md-3">Angkutan Umum Kota Bogor</p>
        </div>
      </div>

    </div>

    <div class="fixed-bottom">
      <footer id="footer">
        <div class="container-fluid bg-dark text-light text-center py-md-1">
          <p class="font-weight-light">CopyRight 2018 | Angkot</p>
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