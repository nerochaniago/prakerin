<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="<?php echo base_url("assets/img/Logo Puri.png") ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar Lowongan | PT Puri Makmur Lestari</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <style media="screen">
    a div img {
      width: 80px;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url();?>user">
        <div class="sidebar-brand-icon ">
          <img src="<?= base_url();?>assets/img/Logo Puri.png" alt="logo_pt_puri">
        </div>
        <div class="sidebar-brand-text mx-3"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="color: black;">
        User
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url();?>User">
          <i class="fas fa-fw fa-id-card"></i>
          <span>Akun</span></a>
          <a class="nav-link" href="<?= base_url();?>User/edit_user">
            <i class="fas fa-fw fa-id-card"></i>
            <span>Edit Akun</span></a>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading" style="color: black;">
        Lowongan
      </div>

      <li class="nav-item">
          <a class="nav-link" href="<?= base_url();?>User/daftarLowonganC">
            <i class="fas fa-fw fa-id-card"></i>
            <span>Daftar Lowongan Pekerjaan</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="<?= base_url();?>User/dataPekerjaanC">
            <i class="fas fa-fw fa-id-card"></i>
            <span>Data Pekerjaan yang dilamar</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-gradient-danger  topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white-600 small" style="font-weight: bold;"><?= $user['name'];?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image'];?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Akun
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('Auth/logout');?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pendaftaran Lowongan Pekerjaan</h1>

          <div class="row">
            <div class="col-lg-6">
              <?= $this->session->flashdata('message');?>
            </div>
          </div>

          <!-- Pendaftaran Lowongan -->
        	<div class="container">
        		<div class="col-12 konten" style="background-color: white;">
        			<p>Formulir Pendaftaran</p>
        			<form action="<?php echo site_url(); ?>/User/add_pelamar" method="POST" enctype="multipart/form-data">

        				<!-- Formulir pendaftaran Lowongan Pekerjaan -->
        				<p class="text-center">Formulir pendaftaran Lowongan Pekerjaan</p>
        				<!--Form input Posisi-->
                <div class="form-group row">
                  <label for="hasil" class="col-sm-2 col-form-label">Posisi</label>
                  <div class="col-sm-10">
                    <?php
                      $dd_provinsi_attribute = 'class="form-control select2"';
                      echo form_dropdown('posisi', $dd_provinsi, $provinsi_selected);
                    ?>
                  </div>
                  <!--jquery dan select2-->
                  <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
                  <script src="<?php echo base_url('assets/select2/js/select2.min.js') ?>"></script>
                  <script>
                      $(document).ready(function () {
                          $(".select2").select2({
                              placeholder: "Please Select"
                          });
                      });
                  </script>
                  </div>
        				<!-- Form input nama lengkap -->
        				<div class="form-group row">
        				    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
        				    <div class="col-sm-10">
        				      <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
        				    </div>
        			  	</div>
        				<!-- Form input tempat lahir -->
        			  	<div class="form-group row">
        				    <label for="tmpt_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        				    <div class="col-sm-10">
        				      <input type="text" class="form-control" name="tmpt_lahir" placeholder="Tempat Lahir">
        				    </div>
        			  	</div>
        				<!-- Form input tanggal lahir -->
        			  	<div class="form-group row">
        				    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        				    <div class="col-sm-10">
        				      <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
        				    </div>
        			  	</div>
        			  	<!-- Form input alamat -->
        				<div class="form-group row">
        				    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        				    <div class="col-sm-10">
        				      	<input type="text" class="form-control" name="alamat" placeholder="Alamat">
        				    </div>
        				</div>
                <!-- Form input agama -->
              <div class="form-group row">
                  <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="agama" placeholder="Agama">
                  </div>
              </div>
        				<!-- Form input pendidikan terakhir -->
        			  	<fieldset class="form-group">
        				    <div class="row">
        				      	<legend class="col-form-label col-sm-2 pt-0">Pendidikan Terakhir</legend>
        				     	<div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan1" value="D3" checked>
                          <label class="form-check-label" for="pendidikan1">D3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan2" value="S1">
                            <label class="form-check-label" for="pendidikan2">S1</label>
                        </div>
        				        	<div class="form-check">
        						        <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan3" value="S2" checked>
        						        <label class="form-check-label" for="pendidikan3">S2</label>
        				        	</div>
        				        	<div class="form-check">
        					          	<input class="form-check-input" type="radio" name="pendidikan" id="pendidikan4" value="S3">
        					          	<label class="form-check-label" for="pendidikan4">S3</label>
        				        	</div>
        				      	</div>
        				    </div>
        				</fieldset>
                <!-- Form input Universitas -->
        				<div class="form-group row">
        				    <label for="nomor" class="col-sm-2 col-form-label">Universitas</label>
        				    <div class="col-sm-10">
        				      <input type="text" class="form-control" name="universitas" placeholder="Universitas">
        				    </div>
        			  	</div>
                  <!-- Form input Jurusan -->
          				<div class="form-group row">
          				    <label for="nomor" class="col-sm-2 col-form-label">Jurusan</label>
          				    <div class="col-sm-10">
          				      <input type="text" class="form-control" name="jurusan" placeholder="Jurusan">
          				    </div>
          			  	</div>
        				<!-- Form input email -->
        				<div class="form-group row">
        				    <label for="email" class="col-sm-2 col-form-label">Email</label>
        				    <div class="col-sm-10">
        				      	<input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>" readonly>
        				    </div>
        				</div>
        				<!-- Form input nomor hp -->
        				<div class="form-group row">
        				    <label for="nomor" class="col-sm-2 col-form-label">Nomor HP</label>
        				    <div class="col-sm-10">
        				      <input type="number" class="form-control" name="nomor" placeholder="Nomor HP">
        				    </div>
        			  	</div>
        				<!-- Form input jenis kelamin -->
        				<fieldset class="form-group">
        				    <div class="row">
        				      	<legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
        				     	<div class="col-sm-10">
        				        	<div class="form-check">
        						        <input class="form-check-input" type="radio" name="gender" id="gender" value="Laki-laki" checked>
        						        <label class="form-check-label" for="gender">Laki - Laki</label>
        				        	</div>
        				        	<div class="form-check">
        					          	<input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan">
        					          	<label class="form-check-label" for="gender">Perempuan</label>
        				        	</div>
        				      	</div>
        				    </div>
        				</fieldset>
                <!-- Form input status -->
        				<fieldset class="form-group">
        				    <div class="row">
        				      	<legend class="col-form-label col-sm-2 pt-0">Status</legend>
        				     	<div class="col-sm-10">
        				        	<div class="form-check">
        						        <input class="form-check-input" type="radio" name="status" id="status" value="Lajang" checked>
        						        <label class="form-check-label" for="status">Lajang</label>
        				        	</div>
        				        	<div class="form-check">
        					          	<input class="form-check-input" type="radio" name="status" id="status" value="Menikah">
        					          	<label class="form-check-label" for="status">Menikah</label>
        				        	</div>
        				      	</div>
        				    </div>
        				</fieldset>
                <!-- Form input Foto -->
                <div class="form-group row">
                  <label for="title">Foto Formal</label>
                  <input type="file" class="form-control-file" accept="image/*" name="foto">
                </div>
                <!-- Form input CV -->
                <div class="form-group row">
                  <label for="title">CV</label>
                  <input type="file" class="form-control-file" accept="PDF/*" name="cv">
                </div>
                <input type="hidden" name="hasil" value="no">
                <!-- Validasi pendaftaran -->
                <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </div>
                <br>
              </form>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; PT Puri Makmur Lestari 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('Auth/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url();?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
