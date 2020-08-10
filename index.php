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
    

<style type="text/css">
	/*.hero-side-category nav.category-menu > ul > li.menu-item-has-children > ul.category-mega-menu > li > a::before {
    font-family: 'fontAwesome';
    content: "\f054";
    position: absolute;
    right: 25px;
    top: 6px;
    line-height: 50px;
}*/


.abcd{
	left:200px;
}

.img-size{
    width:158px !important;
    height:132px !important;
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
	=            Hero slider with category         =
	=============================================-->
	<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $base_url."api/Categories/GetAllCategories",
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


?>
	<div class="hero-slider-with-category-container mt-35 mb-35">
		<div class="container">
			<?php if (!empty($_SESSION['registere'])) { ?>
    								<p><?php echo $_SESSION['registere']; 
    								?></p>
   							 <?php } ?>
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<!--=======  slider left category  =======-->
					
					<div class="hero-side-category">
						<!-- Category Toggle Wrap -->
						<div class="category-toggle-wrap">
							<!-- Category Toggle -->
							<button class="category-toggle"> <span class="arrow_carrot-right_alt2 mr-2"></span> All Categories</button>
						</div>

						<!-- Category Menu -->
						<nav class="category-menu">
							
							<ul>
								<?php foreach ($data as $value) {
		
									if (!empty($value['SubCategories'])) {
										

								?>
								<li class="menu-item-has-children"><a href="shop-left-sidebar.php?category_id=<?php echo $value['CategoryID']; ?>"><?php echo $value['Category']; ?> </a>
									<ul class="category-mega-menu">
									<?php
									$subcategory = $value['SubCategories'];
									foreach ($subcategory as $subcat) {
										if(!empty($subcat['Sections'])){
									?>
												<li class="menu-item-has-children"><a href="shop-left-sidebar.php?category_id=<?php echo $subcat['SubCategoryID']; ?>"><?php echo $subcat['SubCategory']; ?> </a>
													<ul class="category-mega-menu abcd">
														<?php
														$sections = $subcat['Sections'];
														foreach ($sections as $section) {
															
														?>
														<li><a href="shop-left-sidebar.php?category_id=<?php echo $section['SectionID']; ?>"><?php echo $section['Section']; ?> </a></li>
														<?php
														}
														 ?>
													</ul>
												</li>

										<?php }
										else{
											?>
											<li class="menu-item-has-children"><a href="#"><?php echo $subcat['SubCategory']; ?> </a></li>
									<?php 
									 } }
									
									?>
									</ul>
								
								</li>
							<?php } 
							else{ ?>
								<li><a href="shop-left-sidebar.php?category_id=<?php echo $value['CategoryID']; ?>"><?php echo $value['Category']; ?> </a></li>
							<?php } } ?>
							</ul>
						</nav>
					</div>
					
					<!--=======  End of slider left category  =======-->
				</div>
				<div class="col-lg-6 col-md-12">
					<!--=======  slider container  =======-->
					
					<div class="slider-container">
                        <!--=======  Slider area  =======-->
                            
                        <div class="hero-slider-three">
                            <!--=======  hero slider item  =======-->
                                
                            <div class="hero-slider-item slider-bg-5">
                                <!-- <div class="slider-content">
                                    <h1>Organic<span>vegetables</span></h1>
                                    <h1 class="change-text">Up to <span>50% off</span></h1>  
                                    
                                    <p><img src="assets/images/icon-slider.png" alt=""> <span>save up to 10%</span></p>
                                    <p><img src="assets/images/icon-slider.png" alt=""> <span>free shipping</span></p>
                                    <p><img src="assets/images/icon-slider.png" alt=""> <span>return in 24 hours</span></p>

                                    <a href="shop-left-sidebar.php" class="slider-two-btn mt-20">start at $9</a>
                                </div> -->
                            </div>
                            
                            <!--=======  End of hero slider item  =======-->


                            <!--=======  Hero slider item  =======-->
                            
                            <!-- <div class="hero-slider-item slider-bg-6">
                                <div class="slider-content">
                                    <h1>Organic<span>vegetables</span></h1>
                                    <h1 class="change-text">Up to <span>50% off</span></h1>  
                                    
                                    <p><img src="" alt=""> <span>save up to 10%</span></p>
                                    <p><img src="assets/images/icon-slider.png" alt=""> <span>free shipping</span></p>
                                    <p><img src="assets/images/icon-slider.png" alt=""> <span>return in 24 hours</span></p>

                                    <a href="shop-left-sidebar.php" class="slider-two-btn mt-20">start at $9</a>
                                </div>
                            </div> -->
                            
                            <!--=======  End of Hero slider item  =======-->
                            
                        </div>
                        
                        <!--=======  End of Slider area  =======-->
					</div>
					
					<!--=======  End of slider container  =======-->
				</div>
                
                <div class="col-lg-3 col-md-12">
					<!--=======  slider side banner container  =======-->
					
					<div class="slider-side-banner-container">
						<div class="row">
							<!--=======  single banner  =======-->
							<div class="col-lg-12 col-sm-6">
								<div class="slider-side-banner mb-20 mb-sm-0 mb-xs-0">
									<a href="shop-left-sidebar.php">
										<img src="assets/images/banners/home3-banner1-1.jpg" class="img-fluid" alt="">
									</a>
								</div>
							</div>
							
							<!--=======  End of single banner  =======-->
							<!--=======  single banner  =======-->
							<div class="col-lg-12 col-sm-6">
								<div class="slider-side-banner mb-0 mb-sm-0 mb-xs-0">
									<a href="shop-left-sidebar.php">
										<img src="assets/images/banners/home3-banner1-2.jpg" class="img-fluid" alt="">
									</a>
								</div>
							</div>
							
							<!--=======  End of single banner  =======-->
						</div>
					</div>
					
					<!--=======  End of slider side banner container  =======-->


				</div>
			</div>
		</div>
	</div>
	
    <!--=====  End of Hero slider with category   ======-->
    

    
	<!--=============================================
	=            Policy area         =
	=============================================-->
	
	
	
	<!--=====  End of Policy area  ======-->

	<!--=============================================
	=            category slider         =
	=============================================-->
	
	<div class="slider category-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category slider section title  =======-->
					
					<div class="section-title">
						<h3>top categories</h3>
					</div>
					
					<!--=======  End of category slider section title  =======-->
					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  category container  =======-->
					
					<div class="category-slider-container">

						<!--=======  single category  =======-->
						<?php 
                        
                          $curl = curl_init();

                        curl_setopt_array($curl, array(
                        CURLOPT_URL => $base_url."api/Categories/GetTopCategories",
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
                        
                        foreach ($data as $value) {
									/*echo $value['Category']. '<br>';*/
								?>
						<div class="single-category">
							<div class="category-image">
								<a href="shop-left-sidebar.php?category_id=<?php echo $value['CategoryID']; ?>" title="Vegetables">
									<img src="<?php echo $value['ImageURl']; ?>" class="img-fluid img-size" alt="">
								</a>
							</div>
							<div class="category-title">
								<h3>
									<a href="shop-left-sidebar.php?category_id=<?php echo $value['CategoryID']; ?>"> <?php echo $value['Category']; ?></a>
								</h3>
							</div>
						</div>
						<?php } ?>
						<!--=======  End of single category  =======-->

						<!--=======  single category  =======-->
						
					</div>
					
					<!--=======  End of category container  =======-->

				</div>
			</div>
		</div>
	</div>
	
    <!--=====  End of category slider  ======-->
    
    <div class="slider tab-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="tab-slider-wrapper">
						<nav>
							<div class="nav nav-tabs" id="nav-tab" role="tablist">
								<a class="nav-item nav-link active" id="featured-tab" data-toggle="tab" href="#featured" role="tab"
									aria-selected="true">Featured</a>
								<a class="nav-item nav-link" id="new-arrival-tab" data-toggle="tab" href="#new-arrivals" role="tab"
									aria-selected="false">New Arrival</a>
								<a class="nav-item nav-link" id="nav-onsale-tab" data-toggle="tab" href="#on-sale" role="tab"
									aria-selected="false">On Sale</a>
							</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
								<!--=======  tab slider container  =======-->
								
								<div class="tab-slider-container">

									<?php

									$curl = curl_init();

									curl_setopt_array($curl, array(
									  CURLOPT_URL => $base_url."api/Products/GetFeaturedProducts",
									  CURLOPT_RETURNTRANSFER => true,
									  CURLOPT_TIMEOUT => 30,
									  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									  CURLOPT_CUSTOMREQUEST => "GET",
									  CURLOPT_HTTPHEADER => array(
									    "cache-control: no-cache"
									  ),
									));

									$response11 = curl_exec($curl);
									$err = curl_error($curl);

									curl_close($curl);

									$response11 = json_decode($response11, true);

									$featured_data = $response11["Data"];
									$i = 0;

									?>

									<!--=======  single tab slider item  =======-->
									<?php foreach ($featured_data as $value) { ?>
										<?php
										if ($i % 2 == 0) {
										  echo '<div class="single-tab-slider-item">';
										}
										?>
										<!-- <div class="single-tab-slider-item"> -->
											<!--=======  tab slider sub product  =======-->
											
											<div class="gf-product tab-slider-sub-product">
												<div class="image">
													<!-- <a href="single-product.html"> -->
														<!-- <span class="onsale">Sale!</span> -->
														<img src="<?php echo $value['ImageUrl']; ?>" class="img-fluid img-size" alt="">
													<!-- </a> -->
													<?php $i++; ?>
													<div class="product-hover-icons">

														<input type="hidden" id="proid<?php echo $i; ?>" name="proid" value="<?php echo $value['ProductID']; ?>">
														<input type="hidden" id="name<?php echo $i; ?>" name="name" value="<?php echo $value['ProductName']; ?>">
														<input type="hidden" id="price<?php echo $i; ?>" name="price" value="<?php echo $value['SaleRate']; ?>">
														<input type="hidden" id="imageurl<?php echo $i; ?>" name="imageurl" value="<?php echo $value['ImageUrl']; ?>">
														<input type="hidden" id="qty<?php echo $i; ?>" name="qty" value="1">


														<button id="<?php echo $i; ?>" title="Add To Cart" onClick="addtocart(this.id)" name="addcart" style="border: none;background-color: Transparent;overflow: hidden;outline:none;">
															<a href="javascript:void(0)" data-tooltip="Add to cart"><span class="icon_cart_alt"></span></a>
														</button>
														<!-- <a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
														<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
														<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a> -->
													</div>
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
												
											</div>
										<?php
										if ($i % 2 == 0) {
										  echo '</div>';
										}
										?>
										<!-- </div> -->
									<?php } ?>
											<!--=======  End of tab slider sub product  =======-->

									<!--=======  End of single tab slider product  =======-->
								</div>
									
								<!--=======  End of tab slider container  =======-->
							</div>
							<div class="tab-pane fade" id="new-arrivals" role="tabpanel" aria-labelledby="new-arrival-tab">
								<!--=======  tab slider container  =======-->
																
								<div class="tab-slider-container">
									<!--=======  single tab slider item  =======-->
									<?php

									$curl = curl_init();

									curl_setopt_array($curl, array(
									  CURLOPT_URL => $base_url."api/Products/GetNewArrivals",
									  CURLOPT_RETURNTRANSFER => true,
									  CURLOPT_TIMEOUT => 30,
									  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									  CURLOPT_CUSTOMREQUEST => "GET",
									  CURLOPT_HTTPHEADER => array(
									    "cache-control: no-cache"
									  ),
									));

									$response22 = curl_exec($curl);
									$err = curl_error($curl);

									curl_close($curl);

									$response22 = json_decode($response22, true);

									$new_arrival_data = $response22["Data"];
									$i = 0;

									?>

									<!--=======  single tab slider item  =======-->
									<?php foreach ($new_arrival_data as $value) { ?>
										<?php
										if ($i % 2 == 0) {
										  echo '<div class="single-tab-slider-item">';
										}
										?>
										<!-- <div class="single-tab-slider-item"> -->
											<!--=======  tab slider sub product  =======-->
											
											<div class="gf-product tab-slider-sub-product">
												<div class="image">
													<!-- <a href="single-product.html"> -->
														<!-- <span class="onsale">Sale!</span> -->
														<img src="<?php echo $value['ImageUrl']; ?>" class="img-fluid img-size" alt="">
													<!-- </a> -->
													<?php $i++; ?>
													<div class="product-hover-icons">

														<input type="hidden" id="proid<?php echo $i; ?>" name="proid" value="<?php echo $value['ProductID']; ?>">
														<input type="hidden" id="name<?php echo $i; ?>" name="name" value="<?php echo $value['ProductName']; ?>">
														<input type="hidden" id="price<?php echo $i; ?>" name="price" value="<?php echo $value['SaleRate']; ?>">
														<input type="hidden" id="imageurl<?php echo $i; ?>" name="imageurl" value="<?php echo $value['ImageUrl']; ?>">
														<input type="hidden" id="qty<?php echo $i; ?>" name="qty" value="1">


														<button id="<?php echo $i; ?>" title="Add To Cart" onClick="addtocart(this.id)" name="addcart" style="border: none;background-color: Transparent;overflow: hidden;outline:none;">
															<a href="javascript:void(0)" data-tooltip="Add to cart"><span class="icon_cart_alt"></span></a>
														</button>
														<!-- <a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
														<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
														<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a> -->
													</div>
												</div>
												<div class="product-content">
													<div class="product-categories">
														<a href="shop-left-sidebar-brand.php"><?php echo $value['BRandTitle']; ?></a>,
														<a href="shop-left-sidebar.php"><?php echo $value['Category']; ?></a>
													</div>
													<h3 class="product-title"><a href="single-product.php"><?php echo $value['ProductName']; ?></a></h3>
													<div class="price-box">
														<!--<span class="main-price">Rs.<?php //echo $value['SaleRate']; ?></span>-->
														<span class="discounted-price">Rs.<?php echo $value['SaleRate']; ?></span>
													</div>
												</div>
												
											</div>
										<?php
										if ($i % 2 == 0) {
										  echo '</div>';
										}
										?>
										<!-- </div> -->
									<?php } ?>
										
											<!--=======  End of tab slider sub product  =======-->
									<!--=======  End of single tab slider product  =======-->
								</div>
										
								<!--=======  End of tab slider container  =======-->
							</div>
							<div class="tab-pane fade" id="on-sale" role="tabpanel" aria-labelledby="nav-onsale-tab">
								<!--=======  tab slider container  =======-->
																
								<div class="tab-slider-container">
									<!--=======  single tab slider item  =======-->

									<?php

									$curl = curl_init();

									curl_setopt_array($curl, array(
									  CURLOPT_URL => $base_url."api/Products/GetOnSaleProducts",
									  CURLOPT_RETURNTRANSFER => true,
									  CURLOPT_TIMEOUT => 30,
									  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
									  CURLOPT_CUSTOMREQUEST => "GET",
									  CURLOPT_HTTPHEADER => array(
									    "cache-control: no-cache"
									  ), 
									));

									$response33 = curl_exec($curl);
									$err = curl_error($curl);

									curl_close($curl);

									$response33 = json_decode($response33, true);

									$onsale_data = $response33["Data"];
									$i = 0;

									?>

									<!--=======  single tab slider item  =======-->
									<?php foreach ($onsale_data as $value) { ?>
										<?php
										if ($i % 2 == 0) {
										  echo '<div class="single-tab-slider-item">';
										}
										?>
										<!-- <div class="single-tab-slider-item"> -->
											<!--=======  tab slider sub product  =======-->
											
											<div class="gf-product tab-slider-sub-product">
												<div class="image">
													<!-- <a href="single-product.html"> -->
														<!-- <span class="onsale">Sale!</span> -->
														<img src="<?php echo $value['ImageUrl']; ?>" class="img-fluid img-size" alt="">
													<!-- </a> -->
													<?php $i++; ?>
													<div class="product-hover-icons">

														<input type="hidden" id="proid<?php echo $i; ?>" name="proid" value="<?php echo $value['ProductID']; ?>">
														<input type="hidden" id="name<?php echo $i; ?>" name="name" value="<?php echo $value['ProductName']; ?>">
														<input type="hidden" id="price<?php echo $i; ?>" name="price" value="<?php echo $value['SaleRate']; ?>">
														<input type="hidden" id="imageurl<?php echo $i; ?>" name="imageurl" value="<?php echo $value['ImageUrl']; ?>">
														<input type="hidden" id="qty<?php echo $i; ?>" name="qty" value="1">


														<button id="<?php echo $i; ?>" title="Add To Cart" onClick="addtocart(this.id)" name="addcart" style="border: none;background-color: Transparent;overflow: hidden;outline:none;">
															<a href="javascript:void(0)" data-tooltip="Add to cart"><span class="icon_cart_alt"></span></a>
														</button>
														<!-- <a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
														<a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
														<a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a> -->
													</div>
												</div>
												<div class="product-content">
													<div class="product-categories">
														<a href="shop-left-sidebar-brand.php"><?php echo $value['BRandTitle']; ?></a>,
														<a href="shop-left-sidebar.php"><?php echo $value['Category']; ?></a>
													</div>
													<h3 class="product-title"><a href="single-product.php"><?php echo $value['ProductName']; ?></a></h3>
													<div class="price-box">
														<!--<span class="main-price">Rs.<?php //echo $value['SaleRate']; ?></span>-->
														<span class="discounted-price">Rs.<?php echo $value['SaleRate']; ?></span>
													</div>
												</div>
												
											</div>
										<?php
										if ($i % 2 == 0) {
										  echo '</div>';
										}
										?>
										<!-- </div> -->
									<?php } ?>
											<!--=======  tab slider sub product  =======-->
									<!--=======  End of single tab slider product  =======-->
								</div>
										
								<!--=======  End of tab slider container  =======-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <!--=============================================
	=            Double banner          =
	=============================================-->
	
	<div class="double-banner-section mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 mb-xs-35">
					<!--=======  single banner  =======-->
					
					<div class="single-banner">
						<a href="shop-left-sidebar.php">
							<img src="assets/images/banners/home2-banner1-1.jpg" class="img-fluid" alt="">
						</a>
					</div>
					
					<!--=======  End of single banner  =======-->
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<!--=======  single banner  =======-->
					
					<div class="single-banner">
						<a href="shop-left-sidebar.php">
							<img src="assets/images/banners/home2-banner1-2.jpg" class="img-fluid" alt="">
						</a>
					</div>
					
					<!--=======  End of single banner  =======-->
				</div>
			</div>
		</div>
	</div>
	
	

	<?php

	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $base_url."api/Brands/GetTopBrands",
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

$datab = $response["Data"];


?>
	
	<div class="slider brand-logo-slider mb-35">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog slider section title  =======-->
					
					<div class="section-title">
						<h3>brand</h3>
					</div>
					
					<!--=======  End of blog slider section title  =======-->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<!--=======  brand logo wrapper  =======-->

					<div class="brand-logo-wrapper pt-20 pb-20">

						<!--=======  single-brand-logo  =======-->
						<?php foreach ($datab as $value) {
						?>
						<div class="col">
							<div class="single-brand-logo">
								
								<a href="brands.php?brand_id=<?php echo $value['BrandID']; ?>">
									<img src="<?php echo $value['ImageURl']; ?>" class="img-fluid" alt="">
								</a>
								<h4 style="text-align: center;"><?php echo $value['BrandTitle']; ?></h4>
							</div>
						</div>
						<?php } ?>
						<!--=======  End of single-brand-logo  =======-->
						<!--=======  single-brand-logo  =======-->

						
						
						<!--=======  End of single-brand-logo  =======-->
					</div>
					
					<!--=======  End of brand logo wrapper  =======-->
				</div>
			</div>
		</div>
	</div>
	
	<!--=====  End of Brand logo slider  ======-->
    



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
			$( ".shopping-cart" ).load( "index.php .shopping-cart" );
			
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