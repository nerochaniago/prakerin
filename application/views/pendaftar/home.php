<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="<?php echo base_url("assets/img/Logo Puri.png") ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | PT Puri Makmur Lestari</title>
    <!-- My materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- My css -->
    <link rel="stylesheet" href="<?= base_url(); ?> assets/css/script.css">
    <?php  echo link_tag('assets/css/script.css')  ?>
</head>
<body style="display: flex; min-height: 100vh; flex-direction: column;">
    <!--- Navbar --->
    <div class="navbar-fixed">
        <nav class="white darken-2">
            <div class="container">
            <div class="nav-wrapper">
            <a href="<?= base_url(); ?>" class="brand-logo">
        <img src="<?= base_url(); ?>assets/img/Logo Puri.png" alt="logo" style="width: 60px; margin-top: 5px; ">
        </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black" style="padding-left: 10px; padding-right: 10px;">dehaze</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?= base_url();?>Pendaftar_C/lowonganKerja"  style="color: green;"><i class="material-icons left">work</i>Lowongan Pekerjaan</a></li>
            </ul>
            </div>
            </div>
            <div class="progress red">
              <div class="indeterminate green darken-2"></div>
          </div>
        </nav>
    </div>
    <!-- sidenav -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="<?= base_url();?>Pendaftar_C/lowonganKerja">Lowongan Pekerjaan</a></li>
    </ul>



    <!-- jumbotron parallax -->
    <div class="parallax-container" style="background-color: rgba(11,148,68,0.7); height: 395px;">
      <div class="parallax"><img src="<?= base_url(); ?>assets/img/puri.jpg"></div>
    </div>
    <!-- main content -->

    <main>

    </main>

    <!-- footer -->
    <footer class="page-footer red darken-3 ">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contact</h5>
                <p class="grey-text text-lighten-4">Jl. Terusan Buah Batu Komp BBCA No. 48 Bandung</p>
              </div>
            </div>
            <hr>
          </div>
          <div class="footer-copyright red darken-3">
            <div class="container">
            <h7 style="color: black;"> <strong> © 2019 PT Puri Makmur Lestari </strong> </h7>
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
</body>
</html>
