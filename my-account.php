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
							<li class="active">My Account</li>
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
	=            My account page section         =
	=============================================-->
	<?php

    $token2 = $_SESSION["token"];
    
	header('Content-Type: application/json');
	$chz = curl_init($base_url.'api/OnlineCustomers/GetCustomerProfile'); 
	$authorization = "Authorization: Bearer ".$token2; 
	curl_setopt($chz, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); 
	curl_setopt($chz, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($chz, CURLOPT_POST, 0); 
	curl_setopt($chz, CURLOPT_FOLLOWLOCATION, 1); 
	$resultz = curl_exec($chz); 
	curl_close($chz);
	$json = json_decode($resultz, true);
	$jsondata = $json["Data"];

	?>
	
	<div class="my-account-section section position-relative mb-50 fix">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<div class="row">

						<!-- My Account Tab Menu Start -->
						<div class="col-lg-3 col-12">
							<div class="myaccount-tab-menu nav" role="tablist">
								<a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
									Dashboard</a>

								<a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

								<a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
							</div>
						</div>
						<!-- My Account Tab Menu End -->

						<!-- My Account Tab Content Start -->
						<div class="col-lg-9 col-12">
							<div class="tab-content" id="myaccountContent">
								<!-- Single Tab Content Start -->
								<div class="tab-pane fade show active" id="dashboad" role="tabpanel">
									<div class="myaccount-content">
										<h3>Dashboard</h3>

										<div class="welcome">
											<p>Hello, <strong><?php echo $jsondata["Name"]; ?></strong></p>
										</div>

										<!--<p class="mb-0">From your account dashboard. you can easily check &amp; view your-->
										<!--	recent orders, manage your shipping and billing addresses and edit your-->
										<!--	password and account details.</p>-->
									</div>
								</div>
								<!-- Single Tab Content End -->

								<!-- Single Tab Content Start -->
								<div class="tab-pane fade" id="orders" role="tabpanel">
									<div class="myaccount-content">
										<h3>Orders</h3>

										<div class="myaccount-table table-responsive text-center">
											<table class="table table-bordered">
												<thead class="thead-light">
												<tr>
													<th>No</th>
													<th>OrderNo</th>
													<th>Date</th>
													<th>Status</th>
													<th>Total</th>
													<th>Action</th>
												</tr>
												</thead>

												<tbody>
												<?php

													$acc = $_SESSION['userid'];

													$curl = curl_init();
													curl_setopt_array($curl, array(
													  CURLOPT_URL => $base_url."api/OnlineOrders/GetMyOrders?AccountID=".$acc,
													  CURLOPT_RETURNTRANSFER => true,
													  CURLOPT_TIMEOUT => 30,
													  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
													  CURLOPT_CUSTOMREQUEST => "GET",
													  CURLOPT_HTTPHEADER => array(
													    "cache-control: no-cache"
													  ),
													));

													$response = curl_exec($curl);
													$err = curl_error($curl);

													curl_close($curl);

													$response = json_decode($response, true);

													$data = $response["Data"];
													//print_r($data);

													$sno = 0;
											

													foreach ($data as $value) {
   														$sno++;
												?>
														<tr>
															<td><?php echo $sno; ?></td>
															<td><?php echo $value['SOID']; ?></td>
															<td><?php echo $value['OrderDate']; ?></td>
															<td><?php echo $value['StatusTitle']; ?></td>
															<td><?php echo $value['TotalAmount']; ?> Rs</td>
															<td><a id="<?php echo $value['OrderID']; ?>" onClick="showdetail(this.id)" href="javascript:void(0)" class="btn">View</a></td>
														</tr>
												<?php
													}
												?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- Single Tab Content End -->

								<!-- Single Tab Content Start -->
								<div class="tab-pane fade" id="address-edit" role="tabpanel">
									<div class="myaccount-content">
										<h3>My Profile</h3>

										<address>
											<p><strong>Name: <?php echo $jsondata["Name"] ?></strong></p>
											<p>Address: <?php echo $jsondata["Address"] ?></p>
											<p>City: <?php echo $jsondata["City"] ?></p>
											<p>Province: <?php echo $jsondata["Province"] ?></p>
											<p>Mobile: <?php echo $jsondata["Cell"] ?></p>
											<p>Email: <?php echo $jsondata["Email"] ?></p>
										</address>

										<!-- <a href="#account-info" data-toggle="tab" class="btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>Edit Address</a> -->
									</div>
								</div>
								<!-- Single Tab Content End -->

								<!-- Single Tab Content Start -->
								<div class="tab-pane fade" id="account-info" role="tabpanel">
									<div class="myaccount-content">
										<h3>Account Details</h3>

										<div class="account-details-form">
											<form action="#">
												<div class="row">
													<div class="col-lg-6 col-12 mb-30">
														<input id="first-name" placeholder="First Name" type="text">
													</div>

													<div class="col-lg-6 col-12 mb-30">
														<input id="last-name" placeholder="Last Name" type="text">
													</div>

													<div class="col-12 mb-30">
														<input id="display-name" placeholder="Display Name" type="text">
													</div>

													<div class="col-12 mb-30">
														<input id="email" placeholder="Email Address" type="email">
													</div>

													<div class="col-12 mb-30"><h4>Password change</h4></div>

													<div class="col-12 mb-30">
														<input id="current-pwd" placeholder="Current Password" type="password">
													</div>

													<div class="col-lg-6 col-12 mb-30">
														<input id="new-pwd" placeholder="New Password" type="password">
													</div>

													<div class="col-lg-6 col-12 mb-30">
														<input id="confirm-pwd" placeholder="Confirm Password" type="password">
													</div>

													<div class="col-12">
														<button class="save-change-btn">Save Changes</button>
													</div>

												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- Single Tab Content End -->
							</div>
						</div>
						<!-- My Account Tab Content End -->
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of My account page section  ======-->



	<!--=============================================
	=            Footer         =
	=============================================-->
	
	<?php include('blocks/footer.php'); ?>
	
	<!--=====  End of Footer  ======-->

	<!--=============================================
	=            Quick view modal         =
	=============================================-->
	
	<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-xs-12">
							<!-- product quickview image gallery -->
							<div class="product-image-slider">
								<!--Modal Tab Content Start-->
								<div class="tab-content product-large-image-list" id="myTabContent">
									<div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img src="assets/images/products/product02.jpg" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img src="assets/images/products/product03.jpg" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
									<div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
										<!--Single Product Image Start-->
										<div class="single-product-img img-full">
											<img src="assets/images/products/product04.jpg" class="img-fluid" alt="">
										</div>
										<!--Single Product Image End-->
									</div>
								</div>
								<!--Modal Content End-->
								<!--Modal Tab Menu Start-->
								<div class="product-small-image-list"> 
									<div class="nav small-image-slider" role="tablist">
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="assets/images/products/product01.jpg"
												class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="assets/images/products/product02.jpg"
												class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="assets/images/products/product03.jpg"
												class="img-fluid" alt=""></a>
										</div>
										<div class="single-small-image img-full">
											<a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="assets/images/products/product04.jpg"
												alt=""></a>
										</div>
									</div>
								</div>
								<!--Modal Tab Menu End-->
							</div>
							<!-- end of product quickview image gallery -->
						</div>
						<div class="col-lg-7 col-md-6 col-xs-12">
							<!-- product quick view description -->
							<div class="product-feature-details">
								<h2 class="product-title mb-15">Kaoreet lobortis sagittis laoreet</h2>

								<h2 class="product-price mb-15"> 
									<span class="main-price">$12.90</span> 
									<span class="discounted-price"> $10.00</span>
								</h2>

								<p class="product-description mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
								

								<div class="cart-buttons mb-20">
									<div class="pro-qty mr-10">
										<input type="text" value="1">
									</div>
									<div class="add-to-cart-btn">
										<a href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
									</div>
								</div>

						
								<div class="social-share-buttons">
									<h3>share this product</h3>
									<ul>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- end of product quick view description -->
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--=====  End of Quick view modal  ======-->

	<div id="detailModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
      		<div class="modal-content">
      			<div class="modal-header">
      				<h4 style="text-align: center;" class="modal-title">Order Detail</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			    </div>
			    <div class="modal-body">
			        <div class="row">
						<div id="order_product_detail" class="col-lg-12">
						</div>
					</div>
			    </div>
			</div>
		</div>
	</div>

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

<script>

function showdetail(id){
	var id = id;
	var sno = 0;

	$.ajax({
		url:"serverfiles/server.php",
		method:"POST",
		data:{user_orderid : id},
			
		success:function(data){
			var obj_data = JSON.parse(data);

			var html = '';
			html += ' <table class="table table-bordered table-striped"> ';
				html += ' <thead class="text-center"> ';
					html += ' <tr> ';
						html += ' <th>S.No.</th> ';
						html += ' <th>Product Name</th> ';
						html += ' <th>Quantity</th> ';
						html += ' <th>Price</th> ';
						html += ' <th>Sub Total</th> ';
					html += ' </tr> ';
				html += ' </thead> ';

				html += ' <tbody class="text-center"> ';
				for(i=0;i<obj_data.length;i++){
					var var_productname = obj_data[i]['ProductName'];
					var var_productqty = obj_data[i]['Qty'];
					var var_productprice = obj_data[i]['SalePrice']+" Rs";
					var var_producttotal = obj_data[i]['SubTotal']+" Rs";

					sno++;
					html += ' <tr> ';
						html += ' <td>'+ sno +'</td> ';
						html += ' <td>'+ var_productname +'</td> ';
						html += ' <td>'+ var_productqty +'</td> ';
						html += ' <td>'+ var_productprice +'</td> ';
						html += ' <td>'+ var_producttotal +'</td> ';
					html += ' </tr> ';
				}
				html += ' </tbody> ';
			html += ' </table> ';

			$("#order_product_detail").html(html);
    		$("#detailModal").modal('show');
		}
	});
}

</script>