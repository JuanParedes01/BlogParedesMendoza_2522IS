<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  
  <title>Virtual Folio - Portfolio HTML5 Template</title>

  <link rel="shortcut icon" href="..//favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="../css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/nice-select/css/nice-select.css">
  
  <link rel="stylesheet" type="text/css" href="../vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="../css/virtual.css">
  
  <link rel="stylesheet" type="text/css" href="../css/topbar.virtual.css">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  
  
  <!-- Setting button -->
  
      <!-- Settings -->
      
      <!-- Puschase -->
      
      <!-- Help -->
      <
    </div>
    
  </div>
  
  <div class="vg-page page-home" id="home" style="background-image: url(../img/gears5.jpg)">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">MundoGears</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="{{route('Hola')}}" class="nav-link" data-animate="scrolling">Inicio</a>
            </li>
            <li class="nav-item">
              <a href="{{route('historia')}}" class="nav-link" data-animate="scrolling">Historia</a>
            </li>
            <li class="nav-item">
              <a href="{{route('datos')}}" class="nav-link" data-animate="scrolling">Datos</a>
            </li>
            <li class="nav-item">
              <a href="{{route('enemigos')}}" class="nav-link" data-animate="scrolling">Enemigos</a>
            </li>
           
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
              <button class="btn btn-fab btn-theme no-shadow">En</button>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
   @yield('Bienvenida')
  
  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="/img/gears-of-war-logo-1.jpg" alt="">
          </div>
        </div>
    
    @yield('historia')
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
  
  <div class="vg-page page-service">
    <div class="container">
      <div class="text-center wow fadeInUp">
        
      </div>

          </div>
        
  </div>
  

        </div>
      </div>
    </div>
  </div>
  
  <!-- Portfolio page -->
  
 @yield('datos')

      
            </div>
          </div>
        </div>
      </div> <!-- End gridder -->
  
    </div>
  </div> <!-- End Portfolio page -->
  
  <!-- Testimonial -->
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End testimonial -->
  
  <!-- Client -->
  
    </div>
  </div> <!-- End client -->
  
  <!-- Blog -->
  @yield('enemigos')
          </div>
        </div>
        <div class="col-12 text-center py-3 wow fadeInUp">
          <a href="blog-fullbar.html" class="btn btn-theme"></a>
        </div>
      </div>
    </div>
  </div> <!-- End blog -->
  
  <!-- Contact -->
  
  </div> <!-- End Contact -->
  
  <!-- Footer -->
  
  </div> <!-- End footer -->
  
  
  <script src="..//js/jquery-3.5.1.min.js"></script>
    
  <script src="..//js/bootstrap.bundle.min.js"></script>
    
  <script src="..//vendor/owl-carousel/owl.carousel.min.js"></script>
    
  <script src="..//vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    
  <script src="..//vendor/isotope/isotope.pkgd.min.js"></script>
    
  <script src="..//vendor/nice-select/js/jquery.nice-select.min.js"></script>
    
  <script src="..//vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="..//vendor/wow/wow.min.js"></script>

  <script src="..//vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="..//vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="..//js/google-maps.js"></script>
    
  <script src="..//js/topbar-virtual.js"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>