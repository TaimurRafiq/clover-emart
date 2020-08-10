
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Clover Emart</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- CSS
	============================================ -->
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- FontAwesome CSS -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Elegent CSS -->
	<link href="assets/css/elegent.min.css" rel="stylesheet">

	<!-- Plugins CSS -->
	<link href="assets/css/plugins.css" rel="stylesheet">

	<!-- Helper CSS -->
	<link href="assets/css/helper.css" rel="stylesheet">

	<!-- Main CSS -->
	<link href="assets/css/main.css" rel="stylesheet">

	<!-- Modernizer JS -->
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

	<!--=============================================
	=            Header         =
	=============================================-->

	<?php include 'blocks/header.php' ?>

	<!--=====  End of Header  ======-->

    <!--=============================================
    =            breadcrumb area         =
    =============================================-->
    
    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active">Login - Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (!empty($_SESSION['error'])) { ?>
    	<p style="color:red; margin-left:200px; font-size:16px;"><?php echo $_SESSION['error']; 
    	unset($_SESSION['error']);?></p>
    <?php } ?>
	<!--=====  End of breadcrumb area  ======-->

	<!--=============================================
	=            Login register page content         =
	=============================================-->
	
	<div class="page-content mb-50">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
					<!-- Login Form s-->
					<form action="login-register.php" method="post" >

						<div class="login-form">
							<?php include('serverfiles/errors.php'); ?>
							<h4 class="login-title">Login</h4>

							<div class="row">
								<div class="col-md-12 col-12 mb-20">
									<label>Email*</label>
									<input class="mb-0" type="email" placeholder="Email" name="username">
								</div>
								<div class="col-12 mb-20">
									<label>Password</label>
									<input class="mb-0" type="password" placeholder="Password" name="password">
								</div>
								<div class="col-md-8">
									
									<div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
										<input type="checkbox" id="remember_me">
										<label for="remember_me">Remember me</label>
									</div>
									
								</div>

								<div class="col-md-4 mt-10 mb-20 text-left text-md-right">
									<a href="forgot-password.php"> Forgotten pasward?</a>
								</div>

								<div class="col-md-12">
									<button type="submit" class="register-button mt-0" name="login_user">Login</button>
								</div>

							</div>
						</div>

					</form>
				</div>
				<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
					<form action="login-register.php" method="post">
						<?php include('serverfiles/errors.php'); ?>
						<div class="login-form">
							<h4 class="login-title">Register</h4>
							<?php if (!empty($_SESSION['registere'])) { ?>
    								<p><?php echo $_SESSION['registere']; 
    								unset($_SESSION['registere']);?></p>
   							 <?php } ?>
							<div class="row">
								<div class="col-md-12 mb-20">
									<label>Name</label>
									<input class="mb-0" type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Name">
								</div>
								
								<div class="col-md-12 mb-20">
									<label>Email Address*</label>
									<input class="mb-0" type="email"  value="<?php echo $email; ?>" name="email" placeholder="Email Address">
								</div>
								<div class="col-md-6 col-12 mb-20">
									<label>Phone No.</label>
									<input class="mb-0" type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{8}" minlength="12" maxlength="12" placeholder="021-xxxxxxxx">
								</div>
								<div class="col-md-6 col-12 mb-20">
									<label>Cell No.*</label>
									<input class="mb-0" type="tel" id="cekk" name="cell" pattern="[0-9]{4}-[0-9]{7}" minlength="12" maxlength="12" placeholder="03XX-XXXXXXX">
								</div>
								<div class="col-md-12 mb-20">
									<label>Address*</label>
									<input class="mb-0" type="text"  value="<?php echo $address; ?>" name="address" placeholder="Address">
								</div>
								<div class="col-md-6 col-12 mb-20">
									<label>City*</label>
									<input class="mb-0" type="text"  value="<?php echo $city; ?>" name="city" placeholder="City">
								</div>
								<div class="col-md-6 col-12 mb-20">
									<label>State</label>
									<input class="mb-0" type="text"  value="<?php echo $state; ?>" name="state" placeholder="State">
								</div>
								<div class="col-md-6 mb-20">
									<label>Password</label>
									<input class="mb-0" type="password" name="password_1" placeholder="Password">
								</div>
								<div class="col-md-6 mb-20">
									<label>Confirm Password</label>
									<input class="mb-0" type="password" name="password_2" placeholder="Confirm Password">
								</div>
								<div class="col-12">
									<button type="submit" name="reg_user" class="register-button mt-0">Register</button>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Login register page content  ======-->
	

	<!--=============================================
	=            Footer         =
	=============================================-->
	
	<?php include('blocks/footer.php'); ?>
	
	<!--=====  End of Footer  ======-->


	<!-- scroll to top  -->
	<a href="#" class="scroll-top"></a>
	<!-- end of scroll to top -->
	
	<!-- JS
	============================================ -->
	<!-- jQuery JS -->
	<script src="assets/js/vendor/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="assets/js/popper.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins JS -->
	<script src="assets/js/plugins.js"></script>

	<!-- Main JS -->
	<script src="assets/js/main.js"></script>
	<script type="text/javascript">
		function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
	</script>

</body>

</html>