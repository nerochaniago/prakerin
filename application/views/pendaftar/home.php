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
    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700');
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
    #active {
      background-color:#42f581;

    }
    </style>
    <script type="text/javascript">
    $(document).ready(function(){
        $('ul li a').click(function(){
          $('li a').removeClass("active");
          $(this).addClass("active");
      });
  })
})
    </script>

</head>
<body style="display: flex; min-height: 100vh; flex-direction: column;">
    <!--- Navbar --->
    <div class="navbar-fixed">
        <nav class="white darken-2">

            <div class="nav-wrapper">
            <a href="<?= base_url(); ?>" class="brand-logo" style="margin-left:5px;">
        <img src="<?= base_url(); ?>assets/img/Logo Puri.png" alt="logo" style="width: 60px; margin-top: 5px; ">
        </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons green darken-2" style="padding-left: 10px; padding-right: 10px;">dehaze</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down ">
                <li class="active"><a href="<?= base_url();?>Pendaftar_C"  style="color: green;"><i class="material-icons left">home</i>Home</a></li>
                <li><a href="<?= base_url();?>Pendaftar_C/lowonganKerja"  style="color: green;"><i class="material-icons left">work</i>Lowongan Pekerjaan</a></li>
                <li><a href="<?= base_url();?>Pendaftar_C/pengumuman"  style="color: green;"><i class="material-icons left">info</i>Pengumuman</a></li>
                <li><a href="<?= base_url();?>Auth/login" style="color: green;" target="_blank"><i class="material-icons left">assignment_ind</i>Login</a></li>
            </ul>

            </div>
        </nav>
    </div>
    <!-- sidenav -->
    <ul class="sidenav white" id="mobile-demo">
        <li class="green"><a href="<?= base_url();?>Pendaftar_C/lowonganKerja">Lowongan Pekerjaan</a></li>
        <li class="green"><a href="<?= base_url();?>Auth/login" target="_blank">Login</a></li>
    </ul>



    <!-- jumbotron parallax -->
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption center-align">
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
        </div>
      </li>
    </ul>
  </div>
    <!-- main content -->



    <main>

    </main>

    <!-- footer -->
    <footer class="page-footer red darken-3 ">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text" style="font-family: Roboto; ">Contact</h5><br>
                <p class="grey-text text-lighten-4" style="font-family: Roboto; ">Jl. Terusan Buah Batu Komp BBCA No. 48 Bandung</p>
              </div>
              <div class="col l6 s12">
                <h5 class="white-text" style="font-family: Roboto; text-align:center;">Social Media</h5><br>
                <div class="col offset-l3">
                  <a href="" style="display:block;"><img src="<?= base_url(); ?>assets/img/icons8-facebook-filled-35.png"></a>
                  <a href="" style="display:block;"><img src="<?= base_url(); ?>assets/img/icons8-instagram-filled-35.png"></a>
                  <a href="" style="display:block;"><img src="<?= base_url(); ?>assets/img/icons8-new-post-filled-35.png"></a>
                </div>
                <div class="col l6">
                  <h6 style="margin-top:5px;">Puri Makmur Lestari</h6>
                  <h6 style="margin-top:25.5px;">Puri Makmur Lestari</h6>
                  <h6 style="margin-top:23px;">Puri Makmur Lestari</h6>
                </div>

              </div>
            </div>
            <hr>
          </div>
          <div class="footer-copyright red darken-3">
            <div class="container">
            <h6 style="color: white;  font-family: Roboto;">  © 2019 PT Puri Makmur Lestari </h6>
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
    M.Slider.init(slider,{
      indicators : false
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);


</script>
</body>
</html>
