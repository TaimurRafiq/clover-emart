
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
							<li class="active">Shop</li>
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
	=            Shop page container         =
	=============================================-->
	
	<div class="shop-page-container mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-sm-35 mb-xs-35">

					<!--=======  shop page banner  =======-->
					
					<!-- <div class="shop-page-banner mb-35">
						<a href="shop-left-sidebar.html">
							<img src="assets/images/banners/shop-banner.jpg" class="img-fluid" alt="">
						</a>
					</div> -->
					
					<!--=======  End of shop page banner  =======-->

					<!--=======  Shop header  =======-->
					
					<div class="shop-header mb-35">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center">
								<!--=======  view mode  =======-->
								
								<!-- <div class="view-mode-icons mb-xs-10">
									<a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
									<a href="#" data-target="list"><i class="fa fa-list"></i></a>
								</div> -->
								
								<!--=======  End of view mode  =======-->
								
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12 d-flex flex-column flex-sm-row justify-content-between align-items-left align-items-sm-center">
								<!--=======  Sort by dropdown  =======-->
								
								<!-- <div class="sort-by-dropdown d-flex align-items-center mb-xs-10">
									<p class="mr-10">Sort By: </p>
									<select name="sort-by" id="sort-by" class="nice-select">
										<option value="0">Sort By Popularity</option>
										<option value="0">Sort By Average Rating</option>
										<option value="0">Sort By Newness</option>
										<option value="0">Sort By Price: Low to High</option>
										<option value="0">Sort By Price: High to Low</option>
									</select>
								</div> -->
								
								<!--=======  End of Sort by dropdown  =======-->

								<!-- <p class="result-show-message">Showing 1–12 of 41 results</p> -->
							</div>
						</div>
					</div>
					

					<!--=======  End of Shop header  =======-->

					<!--=======  Grid list view  =======-->

                    <?php

                    $curl = curl_init();
                    
                    curl_setopt_array($curl, array(
                      CURLOPT_URL => $base_url."api/Products/GetProducts?BrandID=null&CategoryID=null&pageNumber=null&pageSize=null&isPagination=false",
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
                    
                    $datac = $response["Data"];

                    //pagination section start

                    $item_perpage = 24;
                    $total_item = count($datac);

                    if (!isset($_GET['page'])) {
					  $page = 1;
					} else {
					  $page = $_GET['page'];
					}

					$start_from = ($page - 1) * $item_perpage;

                    $endpage = ceil($total_item/$item_perpage);

					$startpage = 1;
					$nextpage = $page + 1;
					$previouspage = $page - 1;

					//pagination section end
                    
                    $curl = curl_init();
                    
                    curl_setopt_array($curl, array(
                      CURLOPT_URL => $base_url."api/Products/GetProducts?BrandID=null&CategoryID=null&pageNumber=$page&pageSize=$item_perpage&isPagination=true",
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
                    
                    $i = 0;
                    ?>
					
					<div class="shop-product-wrap grid row no-gutters mb-35">
                        <?php foreach ($data as $value) { ?>
                       
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<!--=======  Grid view product  =======-->
							
							<div class="gf-product shop-grid-view-product">
								<div class="image">
									
										<!-- <span class="onsale">Sale!</span> -->
									<img src="<?php echo $value['ImageUrl']; ?>" class="img-fluid img-size" alt="">
									<?php $i++; ?>
									<div class="product-hover-icons">
										<!-- <form method="post" action="shop.php"> -->
											<input type="hidden" id="proid<?php echo $i; ?>" name="proid" value="<?php echo $value['ProductID']; ?>">
											<input type="hidden" id="name<?php echo $i; ?>" name="name" value="<?php echo $value['ProductName']; ?>">
											<input type="hidden" id="price<?php echo $i; ?>" name="price" value="<?php echo $value['SaleRate']; ?>">
											<input type="hidden" id="imageurl<?php echo $i; ?>" name="imageurl" value="<?php echo $value['ImageUrl']; ?>">
											
											<button id="<?php echo $i; ?>" title="Add To Cart" onClick="addtocart(this.id)" name="addcart" style="border: none;background-color: Transparent;overflow: hidden;outline:none;">
												<a href="javascript:void(0)" data-tooltip="Add to cart"><span class="icon_cart_alt"></span></a>
											</button>
										<!-- </form> -->
									</div>
									
									<div class="product-content">
										<div class="product-categories">
											<a href="#"><?php echo $value['BRandTitle']; ?></a>,
											<a href="#"><?php echo $value['Category']; ?></a>
										</div>
										<h3 class="product-title" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap; "><a style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap; " href="product-detail.php?product_id=<?php echo $value['ProductID']; ?>"><?php echo $value['ProductName']; ?></a></h3>
										<div class="price-box">
											<!--<span class="main-price">Rs.<?php //echo $value['SaleRate']; ?></span>-->
											<span class="discounted-price">Rs.<?php echo $value['SaleRate']; ?></span>
										</div>
									</div>
									<h5><?php echo $value['UnitCode']; ?></h5>
									<div class="pro-qty mb-xs-20">
	                                    <input type="text" id="qty<?php echo $i; ?>" name="qty" value="1">
	                                	<a href="#" class="inc qty-btn">+</a>
	                                	<a href="#" class="dec qty-btn">-</a>
	                            	</div>


									<!--=======  End of Grid view product  =======-->

									<!--=======  Shop list view product  =======-->
									
									
								
								<!--=======  End of Shop list view product  =======-->
								</div>
						
							</div>
						</div>
						<?php } ?>
					</div>
					
					<!--=======  End of Grid list view  =======-->

					<!--=======  Pagination container  =======-->
					
					<div class="pagination-container">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<!--=======  pagination-content  =======-->
									
									<div class="pagination-content text-center">
										<ul>
											<!-- first page -->
                      						<?php if($page >= 3){ ?>
						                        <li class="page-item">
						                          <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
						                            &laquo;
						                            <span class="sr-only">First</span>
						                          </a>
						                        </li>
						                    <?php } ?>


					                      	<!-- previous page -->
					                      	<?php if($page != $startpage){ ?>
					                        	<li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><i class="fa fa-angle-left"></i></a></li>
					                      	<?php } ?>

					                      	<?php if($page >= 2){ ?>
					                        	<li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
					                      	<?php } ?>


					                      	<!-- current page -->
					                      	<li class="page-item active"><a class="page-link" href="?page=<?php echo $page ?>"><?php echo $page ?></a></li>


					                      	<!-- next page -->
					                      	<?php if($page != $endpage){ ?>
					                        	<li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
					                      	<?php } ?>

					                      	<?php if($page != $endpage){ ?>
					                        	<li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><i class="fa fa-angle-right"></i></a></li>
					                      	<?php } ?>


					                      	<!-- last page -->
					                      	<?php if($page != $endpage){ ?>
					                        	<li class="page-item">
					                          		<a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
					                            	<span aria-hidden="true">&raquo;</span>
					                            	<span class="sr-only">Last</span>
					                          		</a>
					                        	</li>
					                      	<?php } ?>
										</ul>
									</div>
									
									<!--=======  End of pagination-content  =======-->
								</div>
							</div>
						</div>
					</div>
					
					<!--=======  End of Pagination container  =======-->

				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Shop page container  ======-->



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
									<!--<span class="main-price">$12.90</span>--> 
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
	
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
      		<div class="modal-content">
			    <div class="modal-body">
			        <p><span id="product-name-model"></span> product has been added in cart</p>
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

function addtocart(id){
	var var_proid = $("#proid"+id).val();
	var var_name = $("#name"+id).val();
	var var_price = $("#price"+id).val();
	var var_imageurl = $("#imageurl"+id).val();
	var var_qty = $("#qty"+id).val();
	$.ajax({
		url:"serverfiles/server.php",
		method:"POST",
		data:{addcart_proid : var_proid,name : var_name,price : var_price,
			imageurl : var_imageurl,qty : var_qty},
			
		success:function(data){
			$( ".shopping-cart" ).load( "shop.php .shopping-cart" );
			
			var obj = JSON.parse(data);
			var var_name = obj;

			$("#product-name-model").html(var_name);
    		$("#myModal").modal('show');
    		setTimeout(function(){
			  $('#myModal').modal('hide')
			}, 2000);
		}
	});
}

</script>