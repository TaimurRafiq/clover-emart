
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

    <style>
        .login-form {
  background-color: #ffffff;
  padding: 30px;
  -webkit-box-shadow: 0px 5px 4px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 5px 4px 0px rgba(0, 0, 0, 0.1); 
        margin-left: 300px;
  margin-right: -300px}
    </style>
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
                            <li class="active">Forgot Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--=====  End of breadcrumb area  ======-->

	<!--=============================================
	=            Login register page content         =
	=============================================-->
	
	<div class="page-content mb-50">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
					<!-- Login Form s-->
					<?php
    $alert = "";
$con = mysqli_connect("localhost","ivhwrcgg_grocery","Grocery@123","ivhwrcgg_grocery");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
date_default_timezone_set('Asia/Karachi');
$error="";
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($con,
  "SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';"
  );
  $row = mysqli_num_rows($query);
  if ($row==""){
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p>
<p><a href="http://localhost:8012/clover-emart/forgot-password.php">
Click here</a> to reset password.</p>';
 }else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
  ?>
  <br />
  <form method="post" action="" name="update">
      <?php if(!empty($alert)){echo $alert;} ?>
    <div class="login-form">
  <input type="hidden" name="action" value="update" />
  <label><strong>Enter New Password:</strong></label>
  <input type="password" name="pass1" maxlength="15" required />
  <label><strong>Re-Enter New Password:</strong></label>
  <input type="password" name="pass2" maxlength="15" required/>
  <input type="hidden" name="email" value="<?php echo $email;?>"/>
<button type="submit" class="register-button mt-0" style="width:40%">Reset Password</button><br /><br />
      </div>
  </form>
<?php
}else{
$error .= "<div class='login-form'><h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which 
as valid only 24 hours (1 days after request).<br /><br /></p></div>";
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  } 
} // isset email key validate end
 
 
if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
$error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
  }
  if($error!=""){
//echo "<div class='error'>".$error."</div><br />";
      echo "<div class='error login-form'>".$error."<a href='javascript:history.go(-1)'>Go Back</a></div>";
}else{
  $pass1;
/*$pass1 = md5($pass1);
mysqli_query($con,"UPDATE `users` SET `password`='".$pass1."' WHERE `email`='".$email."'");
 
mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");*/
 
echo '<div class="page-section section mb-10 login-form"><div class="container"><div class="row"><div class="col-12">Your password has been updated successfully.<br /><a href="http://localhost:8012/clover-emart/login-register.php">Click here</a> to Login.</div></div></div></div><br />';
   } 
}
?>
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