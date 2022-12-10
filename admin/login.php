<?php require_once("../includes/initialize.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>TCUSIS-Admin Site</title>
	 <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../plugins/login/images/tculogo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../plugins/login/css/main.css">
<!--===============================================================================================-->
</head>
   
<style>
    .wrap-login100 {
  width: 330px;
  border-radius: 10px;
  overflow: hidden;

  background: transparent;
}
    .input100 {
  font-family: poppins;
  font-size: 20px;
  color: #780000;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 50px;
  background: transparent;
  padding: 0 10px 0 80px;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
    .input100:focus + .focus-input100::after {
  left: 20px;
  color: #780000;
}
    .has-val.input100 + .focus-input100::after {
  left: 20px;
  color: #780000;
}

.login100-form-btn {
  font-family: Ubuntu-Bold;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 15px;
  min-width: 160px;
  height: 42px;
  border-radius: 21px;

  background: #780000;
  background: -webkit-linear-gradient(#780000);
  background: -o-linear-gradient(left, #780000, #780000, #780000);
  background: -moz-linear-gradient(left, #780000, #780000, #780000);
  background: linear-gradient(left, #780000, #780000, #780000);
  position: relative;
  z-index: 1;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
    	@media screen and (max-width: 768px), (min-device-width: 320px) 
    and (max-device-width: 1024px)  {
         wrap-login100 {
        position: fixed;
        display: flex;
         width: 100%;
        font-size:inherit;
    }
        container-login100{
            display: flex;
        }

    }
</style>
<body>
<?php
 if (logged_in()) {
?>
   <script type="text/javascript">
            window.location = "index.php";
    </script>
<?php }  ?>

<?php
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['uname']);
    $upass = trim($_POST['pass']);
    
    $h_upass = sha1($upass);
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '' OR $upass == '') {
?>    <script type="text/javascript">
                alert("Invalid Username and Password!");
                </script>
            <?php
        
    } else {
		//it creates a new objects of member
        $user = new User();
		//make use of the static function, and we passed to parameters
		$res = $user::AuthenticateUser($uname, $h_upass);
		//then it check if the function return to true
		if($res == true){
			?>   <script type="text/javascript">
					//then it will be redirected to home.php
					window.location = "index.php";
				</script>
			<?php
		
		
		} else {
?>    <script type="text/javascript">
                alert("Username or Password Not Registered! Contact Your administrator.");
                window.location = "index.php";
                </script>
        <?php
        }
        
    }
} else {
    
    $email = "";
    $upass = "";
    
}

?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../plugins/login/images/tcu.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Admin & Faculty Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="login.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="uname" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="btnlogin" style="background: #780000;">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../plugins/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../plugins/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/js/main.js"></script>

</body>
</html>