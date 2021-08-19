<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->
    <?php
    session_start();
    if (!empty($_SESSION['login'])) {
      if($_SESSION['nama']!="admin"){
        header("location:index.php");
      }
      else{
        header("location:admin/index.php");
      }
    }
    ?>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Museum Sandi</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.php">Museum <span>Sandi</span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="index.php">Beranda</a></li>
                <li><a href="kunjungan.php">Kunjungan</a></li>
                <ul class="nav navbar-nav navbar-right ml-auto">      
                <li class="nav-item dropdown">
                  <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Masuk</a>
                  <ul class="dropdown-menu form-wrapper">         
                    <li>
                      <form action="proses_login.php" method="post">
                        <div class="form-group">
                          <table>
                            <tr>
                              <td>-</td>
                              <td><input type="text" class="form-control" placeholder="Username" required="required" name="email"></td>
                              <td>-</td>
                            </tr>
                            <tr><td>.</td></tr>
                            <tr>
                              <td>-</td>
                              <td> <input type="password" class="form-control" placeholder="Password" required="required" name="pass"></td>
                              <td>-</td>
                            </tr>
                          </table>
                        </div>
                        <table align="center">
                          <tr>
                            <td>-</td>
                            <td><input type="submit" class="btn btn-primary btn-block" value="Login"></td>
                            <td>-</td>
                          </tr>
                        </table>
                        <div class="form-footer">
                          <?php
                          if (isset($_GET['pesan'])) {
                            if ($_GET['pesan']=="gagal") {
                              echo "<p>Username atau Password salah</p>";
                            }
                          }
                          ?>
                        </div>
                      </form>
                    </li>
                  </ul>  
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="slider">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="slider_area">
            <!-- Start super slider -->
            <div id="slides">
              <ul class="slides-container">                          
                <li>
                  <img src="img/slider/1(4).jpg" alt="img">
                   <div class="slider_caption">
                    <h2>Museum Sandi</h2>
                    <p>Museum Sandi merupakan museum pertama dan satu-satunya di dunia yang mengoleksi benda-benda dan peralatan untuk mengirimkan pesan.</p>
                  </div>
                  </li>
                <!-- Start single slider-->
                <li>
                  <img src="img/slider/1(2).jpg" alt="img">
                   <div class="slider_caption slider_right_caption">
                    <h2>Situs Rumah Sandi</h2>
                    <p>Pada dasarnya, sebuah rumah memiliki fungsi untuk mengamankan penghuninya dari ancaman dunia luar. 
Di penghujung tahun 40an, sebuah rumah kecil di daerah Dukuh Kulonprogo, tercatat dalam sejarah karena berperan penting dalam menjaga kedaulatan Republik Indonesia.</p>
                  </div>
                </li>
                <!-- Start single slider-->
                <li>
                  <img src="img/slider/1(5).jpg" alt="img">
                   <div class="slider_caption">
                    <h2>Monumen Sanapati</h2>
                    <p>Salah satu peristiwa monumental yang terjadi di Yogyakarta, pada awal kemerdekaan adalah dibentuknya Dinas Kode, yang menjadi awal dari era baru dunia persandian di Indonesia.

Dalam peringatannya yang ke 50, dibangunlah Monumen Sanapati di daerah Kotabaru Yogyakarta. </p>
                  </div>
                </li>
              </ul>
              <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN ABOUT US SECTION ================-->
    <section id="aboutUs">
      <div class="container">
        <div class="row">
        <!-- Start about us area -->
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">Tentang Museum Sandi</h2>
            <p>Museum Sandi Yogyakarta merupakan museum pertama dan satu-satunya di dunia yang mengoleksi benda-benda dan peralatan untuk mengirimkan pesan. Museum Sandi Negara berlokasi di kawasan Kotabaru, Yogyakarta setelah sebelumnya menempati di lantai dasar Museum Perjuangan Yogyakarta. Sejarah Museum Sandi berawal dari kepedulian dan keluhuran budi gubernur DIY. Sri Sultan Hamengku Buwono X yang berkeinginan untuk menempatkan koleksi persandian di Museum Perjuangan Yogyakarta. Hal tersebut disampakan oleh Sri Sultan Hamengku Buwono X saat menerima kunjungan Widyakarta Mahasiswa Sekolah Tinggi Sandi Negara pada bulan Maret 2006. Tawaran tersebut dsambut baik oleh Kepala Lembaga Sandi Negara saat itu, Mayjen TNI Nachrowi Ramli yang kemudian membentuk tim pengisian Museum Sandi yang dipimpin oleh Syahrul Mubarak, S.IP. MM.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="newsfeed_area wow fadeInRight">
            <img src="img/slider/Capture.jpg" alt="img">
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--=========== END ABOUT US SECTION ================--> 

  

    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Museum Sandi</h3>
                <p>Jl. Faridan M Noto No.21, Kotabaru, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55224</p>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Terhubung Dengan Kami</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/museumsandi/"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="https://twitter.com/museumsandiina?lang=en"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Instagram" class="soc_tooltip"  href="https://www.instagram.com/museum.sandi/?hl=id"><i class="fa fa-instagram"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="https://www.youtube.com/channel/UCQwXmTAMieEDMJgaCNUWlXQ"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Wpfreeware</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
    
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>