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
  background-image: url("images/tcu.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
   header{
	position: fixed;
	width: 100%;
	top: 0;
	right: 0;
	z-index: 1000;
	display: flex;
	align-items: center;
	justify-content: space-between;
	background: transparent;
	
	transition: all .50s ease;
} 
  
    .site-logo{
        position: inherit;
        display: flex;
        align-items: center;
        cursor:pointer;
        order: 3;
        margin-left: auto;
    }
    
    nav{
        order: 1;
    }
    
    .site-menu{
        display: flex;
        list-style: none;
    }
    .site-menu li{
        display: inline-block;
        padding: 0px 20px;
    }
    .site-menu li a{
        font-size: 1.1rem;
        font-weight: 500;
        padding: 5pc 0;
        margin: 0px 30;
        transition: all 0.3s ease 0s;
    }
    .site-menu li a:hover{
        color: #fff;
    }
    
    @media (max-width: 480px){
        .site-logo{
            position: sticky;
            margin: 0;
            padding: 0;
            
        }
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
    .site-navbar .site-navigation .site-menu > li.active > a {
    color: #780000 !important;
}
    .site-mobile-menu .site-nav-wrap li.active > a {
    color: #780000;
}
     @media (max-width: 991.98px) {
  .site-menu li a {
    color: #8F2A24;
  }
   .site-navbar .site-navigation .site-menu .active {
      color: #FFCCCB !important; }
    .site-navbar .site-navigation .site-menu > li > a {
        margin-left: 15px;
        margin-right: 15px;
        padding: 20px 0px;
        color: #780000 !important;
        display: inline-block;
        text-decoration: none !important; }
  .site-navbar .site-navigation .site-menu > li > a:hover {
          color: #fff; }
  .site-navbar .site-navigation .site-menu > li.active > a {
        color: #fff !important; 
		}
	.site-navbar .site-navigation .site-menu > li.active > a {
		font-size:18px;
	}
    }
</style>

      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a class="logo" href="<?php echo WEB_ROOT; ?>" style="color:#780000; position:inherit; " ><img src="images/tculogo.png" style="width:50px; height:50px; ">TCUSIS</a>
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

