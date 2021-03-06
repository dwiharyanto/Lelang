<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lelangkah | Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('themes/cont/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('themes/cont/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('themes/cont/css/sb-admin-2.min.css')?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Sign In to Lelangkah as Bidder</h1>
                  </div>
                <?= $this->session->flashdata('message'); ?>

                  <form class="user" method="post" action="<?= base_url('Auth/login'); ?>">
                      <input type="hidden" name="status" value="1">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username"  placeholder="Username" value="<?= set_value('username'); ?>"> <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="pw" name="pw" placeholder="Password"> <?= form_error('pw', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button> 
                   <hr>
                    <br>
                    <center>
                      <a href="<?= base_url(); ?>Auth/loginpenjual" class="btn btn-info btn-user ">
                  <i class="fa fa-user fa-fw"></i> Login as Penjual
                </a>
                <a href="<?= base_url(); ?>Auth" class="btn btn-info btn-user ">
                  <i class="fa fa-users fa-fw"></i> Login as Bidder
                </a>
                </center>
                  </form>
                    <hr><center>
              </form>
                  <div class="text-center">
                    <a class="small" href="<?= base_url(); ?>Auth/registerbidder">Buat Akun Sekarang!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('themes/cont/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('themes/cont/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('themes/cont/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('themes/cont/js/sb-admin-2.min.js')?>"></script>

</body>

</html>
