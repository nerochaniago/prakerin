<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="icon" href="<?php echo base_url("assets/img/Logo Puri.png") ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Hasil | PT Puri Makmur Lestari</title>
    <!-- My materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- My css -->
    <?php  echo link_tag('assets/css/script.css')  ?>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
    html {
      -webkit-touch-callout: none; /* iOS Safari */
      -webkit-user-select: none; /* Safari */
       -khtml-user-select: none; /* Konqueror HTML */
         -moz-user-select: none; /* Firefox */
          -ms-user-select: none; /* Internet Explorer/Edge */
              user-select: none; /* Non-prefixed version, currently
                                    supported by Chrome and Opera */
    }
    </style>


</head>
  <body style="display: flex; min-height: 100vh; flex-direction: column;">
        <!--- Navbar --->
        <div class="navbar-fixed">
            <nav class="white darken-2" style="height:5em ">

                <div class="nav-wrapper">
                <a href="<?= base_url(); ?>" class="brand-logo" style="margin-left:8px;">
            <img src="<?= base_url(); ?>assets/img/Logo Puri.png" alt="logo" style="width: 75px; margin-top: 5px; ">
            </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black" style="padding-left: 10px; padding-right: 10px; height:2.9em">dehaze</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down ">
                    <li style="height:5em "><a href="<?= base_url();?>"  style="color: green;"><i class="material-icons left">home</i>Home</a></li>
                    <li style="height:5em "><a href="<?= base_url();?>Pendaftar_C/lowonganKerja"  style="color: green;"><i class="material-icons left">work</i>Lowongan Pekerjaan</a></li>
                    <li class="active" style="height:5em "><a href="<?= base_url();?>Pendaftar_C/pengumuman"  style="color: green;"><i class="material-icons left">info</i>Hasil Seleksi</a></li>
                    <li style="height:5em "><a href="<?= base_url();?>Auth/login" style="color: green;" target="_blank"><i class="material-icons left">assignment_ind</i>Login</a></li>
                </ul>

                </div>
            </nav>
        </div>
        <!-- sidenav -->
        <ul class="sidenav white" id="mobile-demo">
            <li class="green"><a href="<?= base_url();?>"><i class="material-icons left">home</i>Home</a></li>
            <li class="green"><a href="<?= base_url();?>Pendaftar_C/lowonganKerja"><i class="material-icons left">work</i>Lowongan Pekerjaan</a></li>
            <li class="active"><a href="<?= base_url();?>Pendaftar_C/pengumuman"><i class="material-icons left">info</i>Hasil Seleksi</a></li>
            <li class="green"><a href="<?= base_url();?>Auth/login" target="_blank"><i class="material-icons left">assignment_ind</i>Login</a></li>
        </ul>

        <!-- main content -->
        <main>

          <div class="container">
            <div class="row">
              <div class="col l12 s12">
                <h4 style="font-weight: bold; font-family: Roboto; color: green;" ><?= $publish_hasil['judul'];?></h4>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col l12">
                <?= $publish_hasil['isi']?>
                <br><br><br>

                  <a href='<?= base_url('hasil_seleksi/') . $publish_hasil['file'];?>' class="btn green darken-1">Download Hasil</a>

              </div>
            </div>
          </div>

          </main>

          <!-- footer -->
          <footer class="page-footer red darken-3 ">
                <div class="container">
                  <div class="row">
                    <div class="col l6 s12">
                      <h5 class="white-text" style="font-family: Roboto;">Contact</h5>
                      <p class="grey-text text-lighten-4" style="font-family: Roboto;">Jl. Terusan Buah Batu Komp BBCA No. 48 Bandung</p>
                    </div>
                  </div>
                  <hr>
                </div>
                <div class="footer-copyright red darken-3">
                  <div class="container">
                  <h7 style="color: black;  font-family: Roboto;"> <strong> © 2019 PT Puri Makmur Lestari </strong> </h7>
                  </div>
                </div>
              </footer>

      <!-- javascript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script>
          const sideNav = document.querySelectorAll('.sidenav');
          M.Sidenav.init(sideNav);

          const slider = document.querySelectorAll('.slider');
          M.Slider.init(slider);

          const parallax = document.querySelectorAll('.parallax');
          M.Parallax.init(parallax);

      </script>
      <!-- JQuery -->

      </body>
      </html>
