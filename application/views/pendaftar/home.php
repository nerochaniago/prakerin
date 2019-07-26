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

    #gams {
      width: 100%;
      height: auto;
    }

    #topBtn {
      position: fixed;
      bottom: 40px;
      right: 40px;
      color: rgba(0, 177, 106, 1);
      border: none;
      cursor: pointer;
      display: none;
    }

    .about .shoot  {
        opacity: 0;
        transform: translate(0,-40px);
        transition: .5s;
    }

    .about .shoot.muncul {
        opacity: 1;
        transform: translate(0,0);
    }

    .legal .shoot  {
        opacity: 0;
        transform: translate(0,-40px);
        transition: .5s;
    }

    .legal .shoot.muncul {
        opacity: 1;
        transform: translate(0,0);
    }

    .visi .shoot  {
        opacity: 0;
        transform: translate(0,-40px);
        transition: .5s;
    }

    .visi .shoot.muncul {
        opacity: 1;
        transform: translate(0,0);
    }

    .misi .shoot  {
        opacity: 0;
        transform: translate(0,-40px);
        transition: .5s;
    }

    .misi .shoot.muncul {
        opacity: 1;
        transform: translate(0,0);
    }

    .moto .shoot  {
        opacity: 0;
        transform: translate(0,-40px);
        transition: .5s;
    }

    .moto .shoot.muncul {
        opacity: 1;
        transform: translate(0,0);
    }

    .rekrut .shoot  {
        opacity: 0;
        transform: translate(0,-40px);
        transition: .5s;
    }

    .rekrut .shoot.muncul {
        opacity: 1;
        transform: translate(0,0);
    }

    .struktur .shoot  {
        opacity: 0;
        transform: translate(0,-40px);
        transition: .5s;
    }

    .struktur .shoot.muncul {
        opacity: 1;
        transform: translate(0,0);
    }

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
            <a href="<?= base_url(); ?>" class="brand-logo" style="margin-left:10px;">
        <img src="<?= base_url(); ?>assets/img/Logo Puri New.png" alt="logo" style="width: 150px; margin-top: 5px;">
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
        <img src="<?= base_url(); ?>assets/img/COVER WEB IMAGE A.jpg"> <!-- random image -->
        <div class="caption left-align">
        </div>
      </li>
      <li>
        <img src="<?= base_url(); ?>assets/img/COVER WEB IMAGE A.jpg"> <!-- random image -->
        <div class="caption left-align">
        </div>
      </li>
      <li>
        <img src="<?= base_url(); ?>assets/img/COVER WEB IMAGE A.jpg"> <!-- random image -->
        <div class="caption right-align">
        </div>
      </li>
    </ul>
  </div>
    <!-- main content -->


        <section class="about">
          <div class="container">
            <div class="row">
              <h3 class="center" style="font-family: Roboto;">Profile</h3>
              <hr style="width:200px; border:0; height:3px; background-image: linear-gradient(to right, rgba(207, 0, 15, 1), rgba(3, 201, 169, 1),rgba(207, 0, 15, 1)">
              <div class="col m6 s12 shoot">
                <p class="pKiri" style="text-align:justify; font-family: Roboto; ">PT. Puri Makmur Lestari adalah perusahaan resmi dengan dukungan ijin Perseroan, DisnakerTrans dan tunduk pada peraturan-peraturan yang berlaku di Indonesia sebagai perusahaan pengelola sumber daya manusia.
                Berdiri pada tanggal 31 Agustus 2015 berkantor pusat di Kota Bandung dan memiliki komitmen serta dedikasi yang tinggi sebagai perusahaan yang fokus pada bisnis jasa penyediaan tenaga kerja dan pemborongan pekerjaan untuk mendukung kegiatan operasional perusahaan anda.
                Kami memiliki prinsip-prinsip sebagai dasar dalam menentukan berbagai keputusan perusahaan. Kami berusaha untuk melayani Anda secara konsisten dengan panduan sebagai berikut : <br><br>
                •	Kepatuhan terhadap undang-undang yang berlaku <br>
                •	Bekerja secara etis & profesional <br>
                •	Kejujuran dan keterbukaan <br>
                •	Hubungan jangka panjang <br>
                •	Manfaat untuk semua pihak

                  </p>
              </div>
              <div class="col m6 s12 shoot">
                <p class="pKanan" style="text-align:justify; font-family: Roboto; ">
                  Harapan kami bisa menjadi konsultan pribadi bagi setiap perusahaan yang paham dan mengerti berbagai aspek permasalahan human capital, organisasi, sistem manajemen beserta pemecahannya yang komprehensif. Perusahaan kami mengasah tenaga kerja Indonesia yang telah terbukti sebagai potensi yang dianggap masih terpendam dan belum maksimal dikelola dengan baik dan benar. Dengan demikian kami melakukan perekrutan, seleksi, pengembangan, penempatan human capital atau sumber daya manusia yang memiliki nilai kinerja yang tinggi, disamping memfasilitasi pengembangan human capital yang terstruktur, aplikatif dan sejalan dengan kebutuhan usaha.
                    </p>
              </div>
            </div>
          </div>
        </section>

        <section id="legal" class="legal" style="background-color:rgba(41, 241, 195, 1);">
          <div class="container">
            <div class="row">
              <h3 class="center" style="font-family: Roboto; ">Legalitas Perusahaan</h3>
              <hr style="width:500px; border:0; height:3px; background-image: linear-gradient(to right, rgba(207, 0, 15, 1), rgba(3, 201, 169, 1),rgba(207, 0, 15, 1)">
              <div class="col m12 s12 shoot">
                <p class="center" style="font-family: Roboto; ">
                  <b>Akte Pendirian : </b>&nbsp;	Nomor 31 // 31 Agustus 2015 // Notaris Iman Taufan Djamal SH. M Kn. <br> </p>
                <p class="center" style="font-family: Roboto; ">  <b>Nomor Pengesahan Menkum : </b>&nbsp; 	AHU-2456628.AH.01.01.2015 // tanggal 16 September 2015. <br> </p>
                  <p class="center" style="font-family: Roboto; "> <b>Nomor S.I.U.P : </b>&nbsp; 	0034/IUP-OB/III/2018/DPMPTSP. <br> </p>
                  <p class="center" style="font-family: Roboto; "> <b>Nomor N.P.W.P : </b>&nbsp; 	83.841.479.5 - 424.000. <br> </p>
                  <p class="center" style="font-family: Roboto; "> <b>Nomor Surat PKP : </b>&nbsp; 	S - 137PKP/WPJ.09/KP.0403/2018 // Tanggal 17 April 2018. <br> </p>
                  <p class="center" style="font-family: Roboto; "> <b>Nomor TDP : </b> &nbsp;	101117024532 // Tanggal 27 - Mart - 2018 hingga 27 - Mart - 2023. <br> </p>
                  <p class="center" style="font-family: Roboto; "> <b>Nomor Izin Gangguan : </b>&nbsp; 	0203/IG/I/2018/DPMPTSP // tanggal 24 - jan - 2018 hingga 24 - jan- 2021. <br> </p>
                  <p class="center"style="font-family: Roboto; "> <b>Keterangan Domisili Perusahaan : </b>&nbsp;  	02/DP/KJS/I/2018. <br> </p>
                  <p class="center" style="font-family: Roboto; "> <b>Nomor Induk Berusaha (NIB) : </b>&nbsp;	8120011101563/Aktivitas Penyedia Gabungan Jasa Administrasi Kantor. <br> </p>
              </div>
            </div>
          </div>
        </section>

        <section id="visi" class="visi">
          <div class="container">
              <div class="row">
                <h3 class="center" style="font-family: Roboto; ">Visi</h3>
                <hr style="width:200px; border:0; height:3px; background-image: linear-gradient(to right, rgba(207, 0, 15, 1), rgba(3, 201, 169, 1),rgba(207, 0, 15, 1)">
                <div class="col m12 s12 shoot">
                  <p style="text-align:justify; font-family: Roboto;">Menjadi mitra usaha pilihan dalam penyediaan dan pengelolaan jasa ketenagakerjaan bagi perusahaan-perusahaan yang percaya pada kualitas dan perlakuan profesional dan yang bermartabat kepada semua komponen sumber daya manusia sebagai bagian dalam kemajuan dan pertumbuhan perusahaan.</p>
                </div>
              </div>
          </div>
        </section>

        <section id="misi" class="misi" style="background-color:rgba(41, 241, 195, 1);">
          <div class="container">
              <div class="row">
                <h3 class="center" style="font-family: Roboto; ">Misi</h3>
                <hr style="width:200px; border:0; height:3px; background-image: linear-gradient(to right, rgba(207, 0, 15, 1), rgba(3, 201, 169, 1),rgba(207, 0, 15, 1)">
                <div class="col m12 s12 shoot">
                  <p style="text-align:justify; font-family: Roboto;">1.	Menyediakan sumber daya manusia yang sesuai dengan kualifikasi, melalui proses rekrutmen yang profesional dan transparan. <br>
                      2.	Memastikan hak-hak dan status legal karyawan dipenuhi sesuai perjanjian. <br>
                      3.	Memastikan proses penilaian dan pembinaan karyawan berjalan secara efektif dan transparan. <br>
                      4.	Menjaga komunikasi dengan customer dan karyawan sehingga apabila ditengarai ada masalah, sedini mungkin dapat diselesaikan dengan cepat dan tepat. <br>
                      5.	Menjadi partner bagi customer dalam segala urusan ketenagakerjaan yang relevan. <br>
                      </p>
                </div>
              </div>
          </div>
        </section>


        <section id="moto" class="moto">
          <div class="container">
            <div class="row">
              <h3 class="center" style="font-family: Roboto; ">Moto</h3>
              <hr style="width:200px; border:0; height:3px; background-image: linear-gradient(to right, rgba(207, 0, 15, 1), rgba(3, 201, 169, 1),rgba(207, 0, 15, 1)">
              <div class="col m12 s12 shoot">
                <p style="text-align:justify; font-family: Roboto;">Membangun Masa Depan Tenaga Kerja Indonesia yang Terpadu.
                Kami siap membantu anda dengan service yang terbaik dan membangun relasi yang kuat untuk masa depan yang progressive ini.</p>
              </div>
            </div>
          </div>
        </section>

        <section id="rekrut" class="rekrut" style="background-color:rgba(41, 241, 195, 1);">
          <div class="container">
              <div class="row">
                <h3 class="center" style="font-family: Roboto; ">Rekrutmen & Proses Penerimaan Karyawan</h3>
                <hr style="width:900px; border:0; height:3px; background-image: linear-gradient(to right, rgba(207, 0, 15, 1), rgba(3, 201, 169, 1),rgba(207, 0, 15, 1)">
                <div class="col m12 s12 shoot">
                  <p style="text-align:justify; font-family: Roboto; ">
                    •	Seleksi calon karyawan dengan proses test psikologi / psikotest termasuk test kesehatan jika diperlukan dan interview secara independent, bersih dan professional. <br>
                    •	Dukungan bank data calon karyawan yang massif memungkinkan fleksibilitas dalam proses seleksi. <br>
                    •	Proses kontrak (PKWT) dengan karyawan yang dirancang secara hati-hati untuk mencegah hal-hal yang tidak diinginkan di kemudian hari, baik bagi kami maupun customer. <br>
                    </p>
                </div>
              </div>
          </div>
        </section>

        <section id="struktur" class="struktur">
          <div class="container">
            <div class="row">
              <h3 class="center" style="font-family: Roboto; ">Struktur Organisasi</h3>
              <hr style="width:500px; border:0; height:3px; background-image: linear-gradient(to right, rgba(207, 0, 15, 1), rgba(3, 201, 169, 1),rgba(207, 0, 15, 1)">
              <div class="col m12 s12 shoot">
                <center>
                  <img src="<?=base_url();?>assets/img/struktur.JPG" alt="" id="gams">
                </center>
              </div>
            </div>
          </div>
        </section>




    <!-- footer -->
    <a href="#" id="topBtn"><i class=" medium material-icons ">arrow_upward</i></a>
    <footer class="page-footer " style="background-color:rgba(240, 52, 52, 1)">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="t" style="font-family: Roboto; color: rgba(255, 203, 5, 1);">CONTACT INFO</h5><br>
                <p style="font-family: Roboto; ">PT. Puri Makmur Lestari</p>
                <p style="font-family: Roboto; ">Jl. Terusan Buah Batu Komp BBCA No. 48 Bandung</p>
                <p style="font-family: Roboto; ">Email : rekrutmen@purimakmurlestari.co.id</p>
                <p style="font-family: Roboto; ">Info : info@purimakmurlestari.co.id</p>
              </div>
              <div class="col l6 s12">
                <h5 class="" style="font-family: Roboto; text-align:center; color: rgba(255, 203, 5, 1);">STAY CONNECTED</h5><br>
                <div class="col offset-l3">
                  <div class="" style="margin-left:23.5px;">
                    <a href="" style=""><img src="<?= base_url(); ?>assets/img/icons8-facebook-old-50.png"></a>
                    <a href="" style=""><img src="<?= base_url(); ?>assets/img/icons8-instagram-50.png"></a>
                    <a  style=""><img src="<?= base_url(); ?>assets/img/icons8-twitter-squared-50.png"></a>
                  </div>
                </div>
              </div>
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
      indicators : true,
      height : 680
    });
    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    $(window).scroll(function(){
      var wSroll = $(this).scrollTop();

      if (wSroll > $('.about').offset().top - 350) {
        $('.about .shoot').each(function(i){
          setTimeout(function(){
            $('.about .shoot').eq(i).addClass('muncul');
          },300 * (i+1));
        });
      }
    });


    $(window).scroll(function(){
      var wSroll = $(this).scrollTop();

      if (wSroll > $('.legal').offset().top - 350) {
        $('.legal .shoot').each(function(i){
          setTimeout(function(){
            $('.legal .shoot').eq(i).addClass('muncul');
          },300 * (i+1));
        });
      }
    });

    $(window).scroll(function(){
      var wSroll = $(this).scrollTop();

      if (wSroll > $('.visi').offset().top - 350) {
        $('.visi .shoot').each(function(i){
          setTimeout(function(){
            $('.visi .shoot').eq(i).addClass('muncul');
          },300 * (i+1));
        });
      }
    });

    $(window).scroll(function(){
      var wSroll = $(this).scrollTop();

      if (wSroll > $('.misi').offset().top - 350) {
        $('.misi .shoot').each(function(i){
          setTimeout(function(){
            $('.misi .shoot').eq(i).addClass('muncul');
          },300 * (i+1));
        });
      }
    });

    $(window).scroll(function(){
      var wSroll = $(this).scrollTop();

      if (wSroll > $('.moto').offset().top - 350) {
        $('.moto .shoot').each(function(i){
          setTimeout(function(){
            $('.moto .shoot').eq(i).addClass('muncul');
          },300 * (i+1));
        });
      }
    });

    $(window).scroll(function(){
      var wSroll = $(this).scrollTop();

      if (wSroll > $('.rekrut').offset().top - 350) {
        $('.rekrut .shoot').each(function(i){
          setTimeout(function(){
            $('.rekrut .shoot').eq(i).addClass('muncul');
          },300 * (i+1));
        });
      }
    });

    $(window).scroll(function(){
      var wSroll = $(this).scrollTop();

      if (wSroll > $('.struktur').offset().top - 350) {
        $('.struktur .shoot').each(function(i){
          setTimeout(function(){
            $('.struktur .shoot').eq(i).addClass('muncul');
          },300 * (i+1));
        });
      }
    });
</script>
<script type="text/javascript">
$(document).ready(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 1900) {
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
