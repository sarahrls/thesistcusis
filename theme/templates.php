  <?php
  //login confirmation
 studconfirm_logged_in();

  ?>
<!doctype html>
<html lang="en">

  <head>
    <title>TCUSIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/style.css">

  </head>
<style type="text/css">
  body{
    background-color: #ddd
  }
</style>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" >

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

<style type="text/css">
  .site-menu li a {
    color: #8F2A24;
  }
  
  .site-navbar .site-navigation .site-menu > li > a:hover {
          color: #780000; }
  .site-navbar .site-navigation .site-menu > li.active > a {
        color: #780000 !important; 
		}
	.site-navbar .site-navigation .site-menu > li.active > a {
		font-size:18px;
	}
</style>

      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="<?php echo WEB_ROOT; ?>" style="color:#780000; display:inline;"><img src="images/tculogo.png" style="width:40px; height:40px;">TCUSIS</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation  ml-auto d-none d-lg-block " role="navigation"  style="color: red" >
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active" style="font-size:18px; font-weight:600px; -webkit-text-stroke-color: #ffff; -webkit-text-stroke-width: 1px;"><a href="<?php echo WEB_ROOT; ?>">Home</a></li>
                    <li><a href="<?php echo WEB_ROOT; ?>index.php?page=3">COE</a></li>
                  <li><a href="<?php echo WEB_ROOT; ?>index.php?page=3">List of Subjects</a></li>
                  <li><a href="<?php echo WEB_ROOT; ?>index.php?page=2">Student Info</a></li>
                  <li><a href="<?php echo WEB_ROOT; ?>logout.php">Logout</a></li>  
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>


    <?php check_message(); ?>
    <?php require_once $content;?>
    

  

    </div>

    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/popper.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/bootstrap.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/owl.carousel.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.sticky.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/aos.js"></script>

    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/main.js"></script>

  </body>

</html>

