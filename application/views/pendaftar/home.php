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
    .slider h3 {
      text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }

    #topBtn {
      position: fixed;
      bottom: 40px;
      right: 40px;
      color: black;
      border: none;
      cursor: pointer;
      display: none;
    }

    </style>
    <script type="text/javascript">
    $(document).ready(function(){
        $('ul li a').click(function(){
          $('li a').removeClass("active");
          $(this).addClass("active");
      });
  })
}
    </script>

</head>
<body style="display: flex; min-height: 100vh; flex-direction: column; ">
    <!--- Navbar --->
    <div class="navbar-fixed" id="navbar" class="scrollspy">
        <nav class="white darken-2" style="height:5em ">

            <div class="nav-wrapper">
            <a href="<?= base_url(); ?>" class="brand-logo" style="margin-left:8px;">
        <img src="<?= base_url(); ?>assets/img/Logo Puri.png" alt="logo" style="width: 75px; margin-top: 5px; ">
        </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons black" style="padding-left: 10px; padding-right: 10px; height:2.9em ">dehaze</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down ">
                <li class="active" style="height:5em"><a href="<?= base_url();?>"  style="color: green;"><i class="material-icons left">home</i>Home</a></li>
                <li style="height:5em"><a href="<?= base_url();?>Pendaftar_C/lowonganKerja"  style="color: green;"><i class="material-icons left">work</i>Lowongan Pekerjaan</a></li>
                <li style="height:5em"><a href="<?= base_url();?>Pendaftar_C/pengumuman"  style="color: green;"><i class="material-icons left">info</i>Hasil Seleksi</a></li>
                <li style="height:5em"><a href="<?= base_url();?>Auth/login" style="color: green;" target="_blank"><i class="material-icons left">assignment_ind</i>Login</a></li>
            </ul>

            </div>
        </nav>
    </div>
    <!-- sidenav -->
    <ul class="sidenav white" id="mobile-demo">
        <li class="active"><a href="<?= base_url();?>"><i class="material-icons left">home</i>Home</a></li>
        <li class="green"><a href="<?= base_url();?>Pendaftar_C/lowonganKerja"><i class="material-icons left">work</i>Lowongan Pekerjaan</a></li>
        <li class="green"><a href="<?= base_url();?>Pendaftar_C/pengumuman"><i class="material-icons left">info</i>Hasil Seleksi</a></li>
        <li class="green"><a href="<?= base_url();?>Auth/login" target="_blank"><i class="material-icons left">assignment_ind</i>Login</a></li>
    </ul>

    <!-- jumbotron parallax -->
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
        <div class="caption left-align">
          <h3 style="color:white; font-family: Roboto;">PT PURI MAKMUR LESTARI</h3>
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





        <div class="" style="background-color: white;">
          <div class="container">
            <div class="row">
              <div class="col lg 12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <p>lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>

        </div>




    <!-- footer -->
    <a href="#" id="topBtn"><i class=" medium material-icons ">arrow_upward</i></a>
    <footer class="page-footer red darken-3 ">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text" style="font-family: Roboto; ">Contact</h5><br>
                <p class="grey-text text-lighten-4" style="font-family: Roboto; ">Jl. Terusan Buah Batu Komp BBCA No. 48 Bandung</p>
                <p style="font-family: Roboto; ">Email : rekrutmen@purimakmurlestari.co.id</p>
                <p style="font-family: Roboto; ">Call : </p>
              </div>
              <div class="col l6 s12">
                <h5 class="white-text" style="font-family: Roboto; text-align:center;">Social Media</h5><br>
                <div class="col offset-l3">
                  <div class="" style="margin-left:23.5px;">
                    <a href="" style=""><img src="<?= base_url(); ?>assets/img/icons8-facebook-filled.png"></a>
                    <a href="" style=""><img src="<?= base_url(); ?>assets/img/icons8-instagram-48.png"></a>
                    <a  style=""><img src="<?= base_url(); ?>assets/img/icons8-whatsapp-48.png"></a>
                  </div>

                </div>


              </div>
            </div>
            <hr>
          </div>
          <div class="footer-copyright red darken-3">
            <div class="container">
            <h6 style="margin-left: 10px; font-family: Roboto;">  © 2019 PT Puri Makmur Lestari </h6>
            </div>
          </div>
        </footer>

<!-- javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider,{
      indicators : false,
      height : 550
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

</script>
<script type="text/javascript">
$(document).ready(function(){

  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('#topBtn').fadeIn();
    }
    else {
      $('#topBtn').fadeOut();
    }
  });

  $('topBtn').click(function(){
     $('.scrollspy').scrollSpy();
  });
});
</script>
</body>
</html>
