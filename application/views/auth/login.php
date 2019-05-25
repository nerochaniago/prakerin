<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="<?php echo base_url("assets/img/Logo Puri.png") ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login | PT Puri Makmur Lestari</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <style media="screen">
    div img{
      width: 130px;
    }
    div h1 {
      font-weight: bold;
      font-size: 50px;
    }
    div button.btn {
      color: black;
      font-weight: bold;
    }
    form input.form-control:hover {
      background-color: #ffffcc;
    }
  </style>

</head>

<body class="bg-gradient">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-5">

        <div class="card o-hidden border-2 shadow-lg my-5">
          <div class="card-body p-0 ">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <img src="<?= base_url();?>assets/img/Logo Puri.png" alt="logo_pt_puri">
                    <h1 class=" text-gray-900 mb-4">Login Page</h1>
                  </div>
                  <?= $this->session->flashdata('message');?>
                  <form class="user" method="post" action="<?= base_url()?>Auth/login">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" style="font-weight:bold; color:black;" placeholder="Email" value="<?= set_value('email');?>">
                      <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" style="font-weight:bold; color:black;" placeholder="Password">
                      <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                    </div>
                    <button type="submit" class="btn btn-success btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url();?>Auth/registration">Create an Account!</a>
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
  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
