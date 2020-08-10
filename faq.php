
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
	<style type="text/css">
	
.pro-qty {
    display: inline-block;
    position: relative;
    width: 100px;
    border: 1px solid #ddd;
    height: 40px;
}

.pro-qty a.inc {
    top: 0;
    right: 0;
    border-left: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
}

.pro-qty a {
    width: 20px;
    height: 20px;
    position: absolute;
    font-weight: normal;
    line-height: 20px;
    text-align: center;
    font-size: 18px;
}

.pro-qty a.dec{
	bottom: 0;
    right: 0;
    border-left: 1px solid #ddd;
    padding-top: 2px;
}

.pro-qty input {
    padding-right: 25px;
    width: 100%;
    border: none;
    height: 100%;
    padding-left: 20px;
}
</style>
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
							<li class="active">FAQ</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if (!empty($_SESSION['success'])) { ?>
	<div class="breadcrumb-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumb-container">
                        <p><?php echo $_SESSION['success'];
				        unset($_SESSION['success']); ?></p>		
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	
	
	<!--=====  End of breadcrumb area  ======-->

  
	<!--=============================================
	=            FAQ page content         =
	=============================================-->
	
	<div class="faq-area page-content mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="faq-wrapper">

						<div id="accordion">
                            <div class="card">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
											aria-expanded="true" aria-controls="collapseOne">
											 What is clover-emart.com? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
									data-parent="#accordion">
									<div class="card-body">
										<p>Clover.pk is an e-commerce initiative of Clover Supermarket.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
											aria-expanded="false" aria-controls="collapseTwo">
											Can you ship orders anywhere? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>

								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
									data-parent="#accordion">
									<div class="card-body">
										<p>Yes, currently we ship orders all over in Karachi.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseThree" aria-expanded="false"
											aria-controls="collapseThree">
											What are the delivery charges? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
									data-parent="#accordion">
									<div class="card-body">
										<p>Please visit <a href="delivery-policy.php">Delivery page</a> for more information.</p>
									</div>
								</div>
							</div>
                            
							<div class="card">
								<div class="card-header" id="headingFour">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseFour" aria-expanded="false"
											aria-controls="collapseFour">
											How can I return a product? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour"
									data-parent="#accordion">
									<div class="card-body">
											<p>Please visit <a href="return-policy.php">Return Policy page</a> for more information.</p>
									</div>
								</div>
							</div>
                            
							<div class="card">
								<div class="card-header" id="headingFive">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseFive" aria-expanded="false"
											aria-controls="collapseFive">
											Do I have to pay for shipping charges when returning a product? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive"
									data-parent="#accordion">
									<div class="card-body">
											<p>No, you don't have to pay for shipping charges when returning a product</p>
									</div>
								</div>
							</div>
                            
							<div class="card">
								<div class="card-header" id="headingSix">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseSix" aria-expanded="false"
											aria-controls="collapseSix">
											Can I return a product after 7 days? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseSix" class="collapse" aria-labelledby="headingFive"
									data-parent="#accordion">
									<div class="card-body">
											<p>You have to initiate a return process within 7 days of delivery. Unfortunately after 7 days, we won't be able to accept return request.</p>
									</div>
								</div>
							</div>
                            
							<div class="card">
								<div class="card-header" id="headingSeven">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseSeven" aria-expanded="false"
											aria-controls="collapseSeven">
											Do you verify orders? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
									data-parent="#accordion">
									<div class="card-body">
											<p>Yes, before processing any order our customer service team will call you on your mentioned cell phone number to verify order.</p>
									</div>
								</div>
							</div>
                            
							<div class="card">
								<div class="card-header" id="headingEight">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseEight" aria-expanded="false"
											aria-controls="collapseEight">
											What is the warranty policy? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseEight" class="collapse" aria-labelledby="headingEight"
									data-parent="#accordion">
									<div class="card-body">
											<p>Warranty policy varies from vendor to vendor and product to product. Clover-emart.com does not offer warranty claims directly. Warranty claims are processed directly through the vendor at their respective service centers.</p>
											<p>Not all products come with a warranty. If the products are available with a warranty then it will be clearly mentioned in the product specification or description.</p>
									</div>
								</div>
							</div>
                            
                            <div class="card">
								<div class="card-header" id="headingNine">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseNine" aria-expanded="false"
											aria-controls="collapseNine">
											How can I pay for my order? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseNine" class="collapse" aria-labelledby="headingNine"
									data-parent="#accordion">
									<div class="card-body">
											<p>You can pay through Cash on Delivery, Visa/Master/UnionPay  Credit/Debit Cards, Cash on Delivery.</p>
									</div>
								</div>
							</div>
                            
                            <div class="card">
								<div class="card-header" id="headingTen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseTen" aria-expanded="false"
											aria-controls="collapseTen">
											Why should I buy online? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseTen" class="collapse" aria-labelledby="headingTen"
									data-parent="#accordion">
									<div class="card-body">
											<p>Speeding up the process. By ordering online you will get prices faster and you will be able to go through order confirmation and payment process much faster. This could save days of your time.</p>
									</div>
								</div>
							</div>
                            
                            <div class="card">
								<div class="card-header" id="headingEleven">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseEleven" aria-expanded="false"
											aria-controls="collapseEleven">
											What should I do if the payment is not accepted? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven"
									data-parent="#accordion">
									<div class="card-body">
											<p> Please try again in a little while. If the payment is still not accepted, please verify your account balance. If everything is as it should, but you still can't make the payment, please contact our call center notify us about the problem. We can manage the order manually.</p>
									</div>
								</div>
							</div>
                            
                            <div class="card">
								<div class="card-header" id="headingTwelve">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseTwelve" aria-expanded="false"
											aria-controls="collapseTwelve">
											How can I change delivery address? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve"
									data-parent="#accordion">
									<div class="card-body">
											<p> Sign in to your account and go to “my account”. On “my account” you can change all your contact information.</p>
									</div>
								</div>
							</div>
                            
                            <div class="card">
								<div class="card-header" id="headingThirteen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseThirteen" aria-expanded="false"
											aria-controls="collapseThirteen">
											Can I cancel my order? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen"
									data-parent="#accordion">
									<div class="card-body">
											<p>  If you want to cancel your order, please do so as soon as possible. If we have already processed your order, you need to contact us and return the product. Please contact call center.</p>
									</div>
								</div>
							</div>
                            
                            <div class="card">
								<div class="card-header" id="headingFourteen">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse"
											data-target="#collapseFourteen" aria-expanded="false"
											aria-controls="collapseFourteen">
											Do you have the product in stock? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen"
									data-parent="#accordion">
									<div class="card-body">
											<p>All the products which are shown on our site are available. Order lead time depends on the products and quantities.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!--=====  End of FAQ page content  ======-->


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

</body>

</html>