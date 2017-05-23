<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Halaman Admin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    
  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  
  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  
  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">
  
  <!-- Google Fonts -->
  <link href="/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> 
  
  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate-css/animate.min.css" rel="stylesheet">
  
  <!-- Main Stylesheet File -->
  <link href="../../css/style.css" rel="stylesheet">
  
<!-- =======================================================
  Theme Name: Imperial
  Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  Author: BootstrapMade.com
  Author URL: https://bootstrapmade.com
======================================================= -->
</head>

<body>
 <!--  <div id="preloader"></div> -->
  
<!--==========================
  Hero Section
============================-->
  <!-- <section id="hero">
    <div class="hero-container">
     <div class="wow fadeIn">
        <div class="hero-logo">
         -->  <!-- <img class="" src="img/" alt="Imperial"> -->
        <!-- </div>
        
        <h1>Welcome To Sistem Kepegawaian Matahari Department Store</h1>
        <h2>Honestly <span class="rotating">Is Important</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Beranda</a>
          <a href="pengguna#services" class="btn-services">Data User</a>
        </div>
      </div>
    </div>
  </section> -->
  
<!--==========================
  Header Section
============================-->
  <header id="header">
    <div class="container">
    
      <div id="logo" class="pull-left">
       <!--  <a href="#hero"><img src="../../img/logo.png" alt="" title="" /></img></a>
         --><!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>
        
      <nav id="nav-menu-container">
        <ul class="nav-menu">
         <li><a href="{{url('home#services')}}">Beranda</a></li>
          <li><a href="{{url('pengguna#services')}}">Data User Login</a></li>
          <li class="menu-has-children"><a href="">Data Master</a>
            <ul>
            <li><a href="{{url('jabatan#services')}}">Jabatan</a></li>
            <li><a href="{{url('unitkerja#services')}}">Unit Kerja</a></li>
            <li><a href="{{url('pangkat#services')}}">Pangkat</a></li>
          <li><a href="{{url('lokasikerja#services')}}">Lokasi</a></li>
          </ul>
          </li>
          <li><a href="{{ url('logout')}}">Logout</a></li>    
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
    
<!--==========================
  About Section
============================-->
 <!--  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Beranda</h3>
          <div class="section-title-divider"></div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">
          <h2 class="about-title">Selamat Datang Di Halaman Admin</h2>
          <p class="about-text">
            Administrator  sebagai pengatur serta pengendali utama perangkat yang dapat menambah, mengubah, menghapus data master. Administrator juga yang membuat username dan password default untuk user login . </p>
          <p class="about-text">
           Hak Akses<br><br>Administrator<br><br>1.  Mengelola Data User untuk login ke sistem<br><br>2.  Mengelola Data Master (Jabatan, Pangkat, Unit Kerja, Lokasi)<br><br><br><br><br><br><br><br></p>
        </div>
      </div>
    </div>
  </section> -->
  
<!--==========================
  Services Section
============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
      <div class="clearfix"></div>
    <div class="container">
      @if(Session::has('informasi'))
        <div class="alert alert-info">
          <strong> Informasi :</strong>
          {{Session::get('informasi')}}
        </div>
      @endif
     
        @if (count($errors)> 0)
        <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
          @endforeach
          </ul>
        </div>
        @endif
      @yield('container')
      </div>
        
      </div>
    </div>  
  </section>

  
<!--==========================
  Footer
============================--> 
  <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved
            </div>
            <div class="credits">
              <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
              -->
              Bootstrap Themes by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
  </footer><!-- #footer -->
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  
  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  
  <script src="contactform/contactform.js"></script>
  
    
</body>
</html>