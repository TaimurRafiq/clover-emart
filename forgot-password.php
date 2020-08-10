
<?php
$con = mysqli_connect("localhost","ivhwrcgg_grocery","Grocery@123","ivhwrcgg_grocery");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
$msg = '';
$alert = '';
$error = '';
$msg = isset($_GET['email']) ? $_GET['email'] : '';
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .="<p>Invalid email address please type a valid email address!</p>";
   }else{
    
   /*$sel_query = "SELECT * FROM `users` WHERE email='".$email."'";
   $results = mysqli_query($con,$sel_query);
   $row = mysqli_num_rows($results);*/
    
    $curl = curl_init();
                    
     curl_setopt_array($curl, array(
     CURLOPT_URL => "https://uatmartapi.mangotech-erp.com/api/OnlineCustomers/GetCustomerByEmail?Email=$email",
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_TIMEOUT => 30,
     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
     CURLOPT_CUSTOMREQUEST => "GET",
     CURLOPT_HTTPHEADER => array( "cache-control: no-cache"),));
                    
     $response = curl_exec($curl);
     $err = curl_error($curl);
                    
     curl_close($curl);
                    
     $response = json_decode($response, true);
                    
     $datasearch = $response["Data"];

   if (empty($datasearch)){
   $error .= "<p style=color:red>No user is registered with this email address!</p>";
   }
  }
   if($error!=""){
    $alert = $error;
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*2+$email);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
// Insert Temp Table
mysqli_query($con,
"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");
 
$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="http://localhost:8012/clover-emart/reset-password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">
http://localhost:8012/clover-emart/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>'; 
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset.</p>';   
$output.='<p>Thanks,</p>';
$output.='<p>Clover Emart</p>';
$body = $output; 
$subject = "Password Recovery - clover-emart.com";
 
$email_to = $email;
$fromserver = "noreply@yourwebsite.com"; 
include('PHPMailer/class.phpmailer.php');
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPDebug = 2;
        
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "cloveremart.contact@gmail.com";
$mail->Password = "hrcfdczwdngtvmbf";
$mail->IsHTML(true);
$mail->From = "noreply@yourwebsite.com";
$mail->FromName = "Clover Emart";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send())
        {
            header("location: forgot-password.php?email=error");
        }
        else
        {
            header("location: forgot-password.php?email=success");
        }
   }
}
?>
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
            <?php if($msg == 'success')
                { ?>
                 <div class="alert alert-success">
                    An email has been sent to you with instructions on how to reset your password.
                 </div>
            <?php } if($msg == 'error'){
            ?>
                 <div class="alert alert-danger">
                    Oops! Something went wrong.
                 </div>
            <?php } ?>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
					<!-- Login Form s-->
					<form action="forgot-password.php" method="post" name="reset">

						<div class="login-form">
							<?php echo $alert; ?>
							<h4 class="login-title">Reset Your Password</h4>

							<div class="row">
								<div class="col-md-12 col-12 mb-20">
									<label>Email*</label>
									<input class="mb-0" type="email" placeholder="Email" name="email">
                                </div>
								<div class="col-md-12">
									<button type="submit" class="register-button mt-0" style="width:40%">Reset Password</button>
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