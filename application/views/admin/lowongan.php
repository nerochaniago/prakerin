<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="<?php echo base_url("assets/img/Logo Puri.png") ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">

  <title>Menu Loker | PT Puri Makmur Lestari</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url();?>assets/datepicker/css/bootstrap-datepicker.min.css">
  <!-- Custom styles for this template-->
  <link href="<?= base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <style media="screen">
    a div img {
      width: 80px;
    }
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
  </style>

</head>

<body id="page-top" style="">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url();?>Admin_Puri">
        <div class="sidebar-brand-icon ">
          <img src="<?= base_url();?>assets/img/Logo Puri.png" alt="logo_pt_puri">
        </div>
        <div class="sidebar-brand-text mx-3"></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url();?>Admin_Puri">
          <i class="fas fa-fw fa-tachometer-alt" style="color:#f09e24;"></i>
          <span>Dashboard</span></a>
      </li>



      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="color: black;">
        Menu Loker
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url();?>Admin_Puri/lowongan">
          <i class= "fas fa-briefcase" style="color:#f09e24;"></i>
          <span>Manage Loker</span></a>
      </li>
      <div class="sidebar-heading" style="color: black;">
        Menu Pelamar
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url();?>Admin_puri/Excel_Export">
          <i class= "fas fa-briefcase" style="color:#f09e24;"></i>
          <span>Data Pelamar</span></a>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading" style="color: black;">
        Menu Publish
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url();?>Admin_puri/Publish">
          <i class= "fas fa-briefcase" style="color:#f09e24;"></i>
          <span>Data Publish Hasil</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    <!-- Divider -->


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
                  Profile
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


          <div class="row">
            <div class="col-lg-6">
              <?= $this->session->flashdata('message');?>
            </div>
          </div>


            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800" style="font-family: "Roboto", sans-serif;">Input Lowongan Pekerjaan</h1>
            <hr style="background-color: green;height: 2px;">


          <!-- content utama -->

          <div class="row">
            <div class="col-lg-8">
                <?= form_open_multipart('Admin_Puri/tambahLowongan'); ?>
              <div class="form-group row">
                <label for="posisi" class="col-sm-2 col-form-label">Posisi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="posisi" name="posisi">
                </div>
          </div>
          <div class="form-group row">
            <label for="penempatan" class="col-sm-2 col-form-label">Penempatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="penempatan" name="penempatan" >
            </div>
      </div>
      <div class="form-group row">
        <label for="persyaratan" class="col-sm-2 col-form-label">Persyaratan</label>
        <div class="col-sm-10">
          <textarea class="form-control texteditor" id="syarat" name="syarat" cols="50" rows="4" > </textarea>
        </div>
  </div>
  <div class="form-group row">
    <label for="batas" class="col-sm-2 col-form-label">Batas Penerimaan</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="batas" name="batas" >
    </div>
</div>

      <div class="form-group row">
      <div class="col-sm-2">
        Foto
      </div>
      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-9">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="gambar" name="gambar">
              <label class="custom-file-label" for="image">Max 4MB , jpg/png</label>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="form-group row justify-content-end">
    <div class="col-sm-10">
    <button class="btn btn-success" type="submit" name="button" style="float:right">Add Loker</button>
    </div>
      </form>
  </div>


        </div>
      </div>




        </div>
        <div class="container">
            <hr style="width:900px;">
        </div>

        <br><br>

        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">List Lowongan Pekerjaan</h1>
          <!-- <td style="color:black;"><?= date("d/F/Y",strtotime($lo->batas)); ?></td> -->
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <table id="table_id" class="table table-striped table-bordered responsive ">
                  <thead>
                    <tr style="font-family: Roboto; color:black;">
                      <th>Posisi</th>
                      <th>Penempatan</th>
                      <th>Syarat</th>
                      <th>Batas Penerimaan</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($loker_baru as $lo):?>
                    <tr style="font-family: Roboto; color:black;">
                      <td><?=$lo['posisi'];?></td>
                      <td><?=$lo['penempatan'];?></td>
                      <td><?=$lo['syarat'];?></td>
                      <td><?= date("d/F/Y",strtotime($lo['batas'])); ?></td>
                      <td> <img src="<?= base_url('assets/img/loker/') . $lo['gambar'];?>" class="img-thumbnail" style="width:45px; "/></td>
                      <td>
                            <div class="btn-group">
                              <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#editLoker<?= $lo['id_loker']; ?>">
                                Edit
                              </button>
                              <a href="<?= base_url();?>Admin_Puri/hapusLoker/<?= $lo['id_loker'];?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin?');">Hapus</a>
                            </div>

                            <!-- Modal Tambahkan Pelanggan -->
                      <div class="modal fade" id="editLoker<?= $lo['id_loker'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Loker</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <?= form_open_multipart('Admin_Puri/editLoker'); ?>
                                      <input type="hidden" name="id_loker" value="<?= $lo['id_loker'] ?>">

                                      <div class="form-group">
                                        <label for="posisi">Posisi</label>
                                        <input type="text" class="form-control" id="posisi" name="posisi" value="<?= $lo['posisi'] ?>" placeholder="Posisi">
                                      </div>

                                      <div class="form-group">
                                        <label for="Penempatan">Penempatan</label>
                                        <input type="text" class="form-control" id="penempatan" name="penempatan" value="<?= $lo['penempatan'] ?>" placeholder="Penempatan">
                                      </div>

                                      <div class="form-group">
                                        <label for="persyaratan">Persyaratan</label>
                                          <textarea class="form-control texteditor" cols="50" rows="4"  id="syarat" name="syarat"  ><?= $lo['syarat'];?> </textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="batas">Batas Penerimaan</label>

                                      <input type="date" class="form-control" id="batas" name="batas" value="<?=$lo['batas']?>" >

                                </div>

                                <div class="form-group">
                                  Foto
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar" value="<??>">
                                        <label class="custom-file-label" for="image"><?=$lo['gambar']?></label>
                                </div>
                            </div>

                            <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Edit</button>
                                  </div>
                          </form>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>

                </table>
              </div>
            </div>
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
  <script src="<?= base_url();?>assets/datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url();?>assets/ckeditor/ckeditor.js"></script>
  <script src="<?= base_url();?>assets/ckeditor/adapters/jquery.js"></script>
  <script type="text/javascript">
      $('textarea.texteditor').ckeditor();
  </script>




<script>
		$(document).ready(function () {
			var table = $('#table_id').DataTable({
         scrollY: 400,
         "paging":   false

			});

			table.buttons().container()
				.appendTo('#table_id_wrapper .col-md-6:eq(0)');
		});

    $('.custom-file-input').on('change', function() {
      let filename = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(filename);
    });

	</script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url();?>assets/js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
            $(document).ready(function () {
                $('.datepicker').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>

</body>

</html>
