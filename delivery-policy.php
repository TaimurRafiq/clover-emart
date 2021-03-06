
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
							<li class="active">Delivery Policy</li>
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
				<!--<div class="col-lg-9 col-12">
					<h1>Delivery Policy</h1>
					<br>
					<p>Ensuring you face zero inconvenience, we at Clover-emart.com deliver round the clock offering you delivery options to choose from for your orders.</p>
					<div class="delivery-table table-responsive text-center">
						<table class="table table-bordered">
							<thead class="thead-light">
								<tr>
									<th style="width: 500px;">Delivery</th>
									<th style="width: 500px;">Availability</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td style="width: 500px;">Timeslot</td>
									<td style="width: 500px;">11:00 am to 07:00 pm</td>
								</tr>
							</tbody>
						</table>
					</div>
					<br>
					<br>
					<p>** Delivery Charges will be as below:</p>
					<div class="delivery-table table-responsive text-center">
						<table class="table table-bordered">
							<thead class="thead-light">
								<tr>
									<th style="width: 500px;">Shipping Charges</th>
									<th style="width: 500px;">Weight</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td style="width: 500px;">Flat Rs. 200/-</td>
									<td style="width: 500px;">Under 20 kg</td>
								</tr>
							</tbody>
						</table>
					</div>
					<br>
					<br>
					<p>Rs. 50/- will be charged additionally for every 5 kg weight exceeding 20 kg</p>
					<p>E.g. Order weight is 30kg, shipping charges of Rs. 300/- will be charged</p>
				</div>-->
                <div class="col-lg-9 col-12">
                    <h1>Delivery Policy</h1>
                    <h3>Karachi</h3>
                    <b>Delivery Time</b>: 24-48 Hours<br>
                    <b>Delivery Charges</b>: Rs. 200 per order (Free shipping over Rs1200) 
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