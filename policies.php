
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
							<li class="active">Return Policy</li>
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
					<h1>Policies</h1>
                    <br>
					<h3>Returns and Refunds</h3>
					<p>If your product is damaged, defective, or incorrect at the time of delivery, please contact us within 7 days. Items can be returned within 7 days of delivery i.e. if an item was delivered on 1st June, it can be returned till 8th June. Please note that return request will not be processed if the item is “no longer needed”.
                    All items must be returned is in original form (unused, unworn, original packaging, seals, and tags attached), along with all the accessories, manuals, and warranty card that came with it. All items sent for return first go through quality check to ensure they are returned in the original condition. If a product is returned to us in an inadequate condition, we reserve the right to send it back to you.</p>
                    <br>
					<h3>What is the process of returning an item?</h3>
					<p>If your item does not fall under restricted categories, you can initiate a return request by calling our helpline at (021) 111 256 837. Our customer service team will guide about the return procedure.</p>
                    <br>
					<h3>How long does it take to get a refund?</h3>
					<p>Store Credit: Within 1-4 business days after quality check<br>
                       Bank Deposit: Within 7-12 business days after quality check<br>
                       Credit Card Reversal: Within 1-5 business days after quality check.</p>
                    <br>
					<h3>What is the process of returning an item?</h3>
					<p>If your item does not fall under restricted categories, you can initiate a return request by calling our helpline at (021) 111 256 837. Our customer service team will guide about the return procedure.</p>
                    <br>
					<h3>What items cannot be returned?</h3>
					<p>Items that fall in the following categories are not eligible for returns:<br><br>
                        Skincare and Hair care Items (imported)<br> 
                        Perfumes and Fragrances (including Deodorants)<br>
                        Grocery Items<br>
                        Laundry and Cleaning<br>
                        Pet Supplies<br>
                        All Sale Items<br>
                    </p>
                    <br>
					<h3>What will happen if my return request is not approved?</h3>
					<p>If you return request is not approved we will inform about the reason. Your product will be sent back to you without any shipping charges.
                    </p>
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