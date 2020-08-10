<?php 
$base_url = "https://uatmartapi.mangotech-erp.com/";
//$base_url = "https://api.clover-erp.com/";
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
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/script.js"></script>
        
  <style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  margin-top: 100px;
  margin-bottom: auto;
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 40px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}
          
.container-modal {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
      
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
    </style>
	</head>
	<body>

	<!--=============================================
	=            Header         =
	=============================================-->

	<?php include('blocks/header.php'); ?>

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
    						<li class="active">Checkout</li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    
    <!--=====  End of breadcrumb area  ======-->

	<!--=============================================
	=            Checkout page content         =
	=============================================-->
	<?php
	$prodid = array();
	if ($resultcartc->num_rows > 0) {
	?>
	<div class="page-section section mb-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					
					<!-- Checkout Form s-->
					<form method="post" action="postapi.php" class="checkout-form">
						<div class="row row-40">
							
							<div class="col-lg-7 mb-20">
								
								<!-- Billing Address -->
								<div id="billing-form" class="mb-40">
									<h4 class="checkout-title">Billing Address</h4>
                                    <?php
                                        if(isset($_SESSION['userid'])){
                                            
                                        $cust_token = $_SESSION["token"];
    
                                    	header('Content-Type: application/json');
                                    	$chz = curl_init($base_url.'api/OnlineCustomers/GetCustomerProfile'); 
                                    	$authorization = "Authorization: Bearer ".$cust_token; 
                                    	curl_setopt($chz, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); 
                                    	curl_setopt($chz, CURLOPT_RETURNTRANSFER, true);
                                    	curl_setopt($chz, CURLOPT_POST, 0); 
                                    	curl_setopt($chz, CURLOPT_FOLLOWLOCATION, 1); 
                                    	$resultz = curl_exec($chz); 
                                    	curl_close($chz);
                                    	$json = json_decode($resultz, true);
                                    	$jsondata = $json["Data"];
                                    ?>
									<div class="row">
                                        
                                        <div class="col-md-12 col-12 mb-20">
											<label>Email Address*</label>
											<input type="email" required name="bemail" placeholder="Email Address" value="<?php echo $jsondata["Email"] ?>">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>First Name*</label>
											<input type="text" required name="bfname" placeholder="First Name" value="<?php echo $jsondata["Name"] ?>">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>Last Name</label>
											<input type="text" name="blname" placeholder="Last Name">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>Phone No*</label>
											<input type="text" required name="bphone" placeholder="Phone Number" value="<?php echo $jsondata["Cell"] ?>">
										</div>

										<!-- <div class="col-12 mb-20">
											<label>Company Name</label>
											<input type="text" placeholder="Company Name">
										</div> -->

										<div class="col-6 mb-20">
											<label>Address*</label>
											<input type="text" required name="baddress" placeholder="Billing Address" value="<?php echo $jsondata["Address"] ?>">
											
										</div>

										<!-- <div class="col-md-6 col-12 mb-20">
											<label>Country*</label>
											<input type="text" name="bcountry" placeholder="Country">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Town/City*</label>
											<input type="text" name="bcity" placeholder="Town/City">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>State*</label>
											<input type="text" name="bstate" placeholder="State">
										</div> -->

										<!-- <div class="col-md-6 col-12 mb-20">
											<label>Zip Code*</label>
											<input type="text" placeholder="Zip Code">
										</div> -->

										<!--<div class="col-12 mb-20">-->
										<!--	<div class="check-box">-->
										<!--		<input type="checkbox" id="create_account">-->
										<!--		<label for="create_account">Create an Acount?</label>-->
										<!--	</div>-->
										<!--	<div class="check-box">-->
										<!--		<input type="checkbox" id="shiping_address" data-shipping>-->
										<!--		<label for="shiping_address">Ship to Different Address</label>-->
										<!--	</div>-->
										<!--</div>-->

									</div>
									<?php }else{ ?>
										<div class="row">

                                        <div class="col-md-12 col-12 mb-20">
											<label>Email Address*</label>
											<input type="email" required name="bemail" id="email" placeholder="Email Address">
                                            <div id="status"></div>
										</div>
                                        
  
										<div class="col-md-6 col-12 mb-20">
											<label>First Name*</label>
											<input type="text" required name="bfname" placeholder="First Name">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>Last Name</label>
											<input type="text" name="blname" placeholder="Last Name">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>Phone no*</label>
											<input type="text" required name="bphone" placeholder="Phone number">
										</div>

										<!--<div class="col-md-6 col-12 mb-20">
											<label>City*</label>
											<input type="text" required name="bcity" placeholder="City">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>Province*</label>
											<input type="text" required name="bprovince" placeholder="Province">
										</div>

										<div class="col-6 mb-20">
											<label>Landline</label>
											<input type="text" name="blandline" placeholder="Landline">
											
										</div>-->

										<div class="col-6 mb-20">
											<label>Address*</label>
											<input type="text" required name="baddress" placeholder="Billing Address">
										</div>

										<!-- <div class="col-md-6 col-12 mb-20">
											<label>Country*</label>
											<input type="text" name="bcountry" placeholder="Country">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>Town/City*</label>
											<input type="text" name="bcity" placeholder="Town/City">
										</div>
	
										<div class="col-md-6 col-12 mb-20">
											<label>State*</label>
											<input type="text" name="bstate" placeholder="State">
										</div> -->

										<!-- <div class="col-md-6 col-12 mb-20">
											<label>Zip Code*</label>
											<input type="text" placeholder="Zip Code">
										</div> -->

										<!--<div class="col-12 mb-20">-->
										<!--	 <div class="check-box">-->
										<!--		<input type="checkbox" id="create_account">-->
										<!--		<label for="create_account">Create an Acount?</label>-->
										<!--	</div>-->
										<!--	<div class="check-box">-->
										<!--		<input type="checkbox" id="shiping_address" data-shipping>-->
										<!--		<label for="shiping_address">Ship to Different Address</label>-->
										<!--	</div>-->
										<!--</div>-->

									</div>
									<?php } ?>

								</div>
								
								<!-- Shipping Address -->
								<div id="shipping-form" class="mb-40">
									<h4 class="checkout-title">Shipping Address</h4>

									<div class="row">

										<div class="col-md-6 col-12 mb-20">
											<label>First Name*</label>
											<input type="text" placeholder="First Name">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>Last Name*</label>
											<input type="text" placeholder="Last Name">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>Email Address*</label>
											<input type="email" placeholder="Email Address">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>Phone no*</label>
											<input type="text" placeholder="Phone number">
										</div>

										<!-- <div class="col-12 mb-20">
											<label>Company Name</label>
											<input type="text" placeholder="Company Name">
										</div> -->

										<div class="col-12 mb-20">
											<label>Address*</label>
											<input type="text" placeholder="Shipping Address">
											
										</div>

										<!-- <div class="col-md-6 col-12 mb-20">
											<label>Country*</label>
											<select class="nice-select">
												<option>Bangladesh</option>
												<option>China</option>
												<option>country</option>
												<option>India</option>
												<option>Japan</option>
											</select>
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>Town/City*</label>
											<input type="text" placeholder="Town/City">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>State*</label>
											<input type="text" placeholder="State">
										</div>

										<div class="col-md-6 col-12 mb-20">
											<label>Zip Code*</label>
											<input type="text" placeholder="Zip Code">
										</div> -->

									</div>

								</div>
								
							</div>
							
							<div class="col-lg-5">
								<div class="row">
									
									<!-- Cart Total -->
									<div class="col-12 mb-60">

										<h4 class="checkout-title">Cart Total</h4>

										<div class="checkout-cart-total">

											<!--<h4>Product <span>Total</span></h4>
											
											<ul>
												<?php
												

													while($row = $resultcartc->fetch_assoc())
													{
														$prodid = $row["product_id"]

														?>
														<li><?php echo $row["name"]; ?> X <?php echo $row["quantity"]; ?> <span>Rs.<?php echo $row["price"]; ?></span></li>


														<input type="hidden" name="ProductID[]" value="<?php echo $prodid; ?>">
														<input type="hidden" name="Qty[]" value="<?php echo $row["quantity"]; ?>">
														<input type="hidden" name="SalePrice[]" value="<?php echo $row["price"]; ?>">
														<input type="hidden" name="Total[]" value="<?php echo $row["price"]*$row["quantity"]; ?>">
													<?php } ?>
												<input type="hidden" name="AccountID" value="33">
												<input type="hidden" name="OrderDate" value="<?php echo date('Y-m-d h:i:sa'); ?>">
												<input type="hidden" name="TotalAmount" value="<?php echo $prices; ?>">
												<input type="hidden" name="OrderMode" value="Web">
											</ul>-->
											
											<p>Sub Total <span>Rs.<?php echo $prices; ?></span></p>
											<p>Shipping Fee <span>Rs.00.00</span></p>
											
											<h4>Grand Total <span>Rs.<?php echo $prices; ?></span></h4>
											
										</div>
										
									</div>
									
									<!-- Payment Method -->
									<div class="col-12">

										<h4 class="checkout-title">Payment Method</h4>

										<div class="checkout-payment-method">
											
											<!-- <div class="single-method">
												<input type="radio" id="payment_check" name="payment-method" value="check">
												<label for="payment_check">Check Payment</label>
												<p data-method="check">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
											</div> -->
											
											<div class="single-method">
												<input type="radio" id="payment_cash" name="payment_method" value="payment_cash" checked>
												<label for="payment_cash">Cash on Delivery</label>
												<!-- <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p> -->
											</div>
											
											<div class="single-method">
												<input type="radio" id="payment_bank" name="payment_method" value="payment_bank">
												<label for="payment_bank">Online Visa/MasterCard</label>
												<!-- <p data-method="bank">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p> -->
											</div>
											
											<!-- <div class="single-method">-->
											<!--	<input type="radio" id="payment_paypal" name="payment-method" value="paypal" required>-->
											<!--	<label for="payment_paypal">Paypal</label>-->
											<!--	<p data-method="paypal">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>-->
											<!--</div>-->
											
											<!-- <div class="single-method">
												<input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
												<label for="payment_payoneer">Payoneer</label>
												<p data-method="payoneer">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
											</div> -->
											
											<!--<div class="single-method">
												<input required type="checkbox" id="accept_terms">
												<label for="accept_terms">I’ve read and accept the terms & conditions</label>
											</div>-->
											
										</div>
										


										
										<button type="submit" name="placeorder" class="place-order">Place order</button>
										
									</div>
									
								</div>
							</div>
							
						</div>
					</form>
				  
                    <!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->
                    <div id="id01" class="modal">
                    <form class="modal-content animate" action="checkout.php" method="post">

                        <div class="login-form">
							<?php include('serverfiles/errors.php'); ?>
							<h4 class="login-title" style="text-align:center">Login</h4>

							<div class="row">
								<div class="col-md-12 col-12 mb-20">
									<label>Email*</label>
									<input class="mb-0" type="email" placeholder="Email" name="Username" required>
								</div>
								<div class="col-12 mb-20">
									<label>Password</label>
									<input class="mb-0" type="password" placeholder="Password" name="Password" required>
								</div>
								<div class="col-md-8">
									
									<!--<div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
										<input type="checkbox" id="remember_me">
										<label for="remember_me">Remember me</label>
									</div>-->
									
								</div>

								<div class="col-md-4 mt-10 mb-20 text-left text-md-right">
									<a href="#"> Forgotten pasward?</a>
								</div>

								<div class="col-md-12">
									<button type="submit" class="register-button mt-0" name="loginuser" style="background-color:#1a9a55">Login</button>
								</div>

							</div>
				         </div>

                    <div class="container-modal" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="background-color:#f25761; color:white;">Cancel</button>
                    </div>
                </form>
                </div>
                    
                    
				</div>
			</div>
		</div>
	</div>
	<?php }
	else{
?>
	<div class="page-section section mb-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4>No Item In Your Cart</h4>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
	<!--=====  End of Checkout page content  ======-->
	

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
    
        
        <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	</body>

	</html>