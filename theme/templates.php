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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/style.css">

  </head>
<style type="text/css">
  
   header{
	position: fixed;
    display: flex;
	width: 100%;
	top: 0;
	right: 0;
	z-index: 1000;
	display: flex;
	align-items: center;
	justify-content: space-between;
    background-color: #780000;
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
    
    .col-9{
        position: sticky;
    }
    
    body{
        overflow-y: hidden;
    }
    .site-menu{
        display: ;
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
    
 .topnav {
  overflow: hidden;
  background-color: #780000;
     float: right;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #780000;
  color: white;
    border-radius: 10px;
    text-decoration: underline;
}
    .active:hover{
        text-decoration-color: #fff;  
        text-decoration: underline;
    }

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
    border-radius: 10px;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

    
</style>
  <body data-target=".site-navbar-target" data-offset="300" >

    
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
                <a class="logo" href="<?php echo WEB_ROOT; ?>" style="color:#fff; position:inherit; " ><img src="images/tculogo.png" style="width:50px; height:50px; ">TCUSIS</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

            
                


<div class="topnav" id="myTopnav">
  <a style="font-size:18px; font-weight:600px; -webkit-text-stroke-color: #780000; font-weight:700; " href="<?php echo WEB_ROOT; ?>" class="active">Home</a>
  <a href="#">COE</a>
  <a href="<?php echo WEB_ROOT; ?>index.php?page=3">List of Grades</a>
  <div class="dropdown" style="position: static;">
    <button class="dropbtn">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="<?php echo WEB_ROOT; ?>index.php?page=2">Account Info</a>
      <a href="<?php echo WEB_ROOT; ?>logout.php">Logout</a>
      
    </div>
  </div>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

            
            </div>

            
          </div>
        </div>

      </header>

<div>
    <?php check_message(); ?>
    <?php require_once $content;?>
    
</div>
  

    </div>
     
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
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

