<?php session_start(); 
error_reporting(0);
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<?php include('serverfiles/server.php'); ?>
<header>
			<!--=======  header top  =======-->
	
			<div class="header-top pt-10 pb-10 pt-lg-10 pb-lg-10 pt-md-10 pb-md-10">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center text-sm-left text-lg-right">
							<!-- currncy language dropdown -->
							<!-- <div class="lang-currency-dropdown">
								<ul>
									<li> <a href="#">English <i class="fa fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">French</a></li>
											<li><a href="#">Japanease</a></li>
										</ul>
									</li>
									<li><a href="#">Dollar <i class="fa fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Euro</a></li>
										</ul>
									</li>
								</ul>
							</div> -->
							<!-- end of currncy language dropdown -->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  text-center text-sm-right">
							<!-- header top menu -->
							<div class="header-top-menu">
								<ul>
									<?php  if (isset($_SESSION['username'])){ ?>
									<li><a href="my-account.html">Welcome (<?php echo $_SESSION['username']; ?>) </a></li>
									
									<li><a href="my-account.php">My account</a></li>
									<li><a href="checkout.php">Checkout</a></li>
									<li><a href="index.php?logout='1'" style="color: red;">logout</a></li>

									<?php } else{ ?>
									
									<li><a href="login-register.php">Login/Register</a></li>
									<li><a href="checkout.php">Checkout</a></li>
								<?php } ?>
								</ul>
							</div>
							<!-- end of header top menu -->
						</div>
					</div>
				</div>
			</div>
	
			<!--=======  End of header top  =======-->
	
			<!--=======  header bottom  =======-->
	
			<div class="header-bottom header-bottom-other header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12 col-xs-12 text-lg-left text-md-center text-sm-center">
							<!-- logo -->
							<div class="logo">
								<a href="index.php">
									<img src="assets/images/logo.png" class="img-fluid" alt="">
								</a>
							</div>
							<!-- end of logo -->
						</div>
						<div class="col-md-9 col-sm-12 col-xs-12">
							<div class="menubar-top d-flex justify-content-between align-items-center flex-sm-wrap flex-md-wrap flex-lg-nowrap mt-sm-15">
								<!-- header phone number -->
								<div class="header-contact d-flex">
									<div class="phone-icon">
										<img src="assets/images/icon-phone.png" class="img-fluid" alt="">
									</div>
									<div class="phone-number">
										Phone: <span class="number">021-111-Clover (256837) </span>
									</div>
								</div>
								<!-- end of header phone number -->
								<!-- search bar -->
								<div class="header-advance-search">
									<!--<form action="#">-->
										<input id="searchproduct" type="text" placeholder="Search your product">
										<button id="ser_id" onClick="searchproduct()"><span class="icon_search"></span></button>
									<!--</form>-->
                                </div>
								<script type="text/javascript">
								
								    document.getElementById("searchproduct")
                                        .addEventListener("keyup", function(event) {
                                        event.preventDefault();
                                        if (event.keyCode === 13) {
                                            document.getElementById("ser_id").click();
                                        }
                                    });
                                    
									function searchproduct(){
										var search_product = $("#searchproduct").val();
										window.location = "search-product.php?searchProduct="+search_product;
									}
								</script>
								<!-- end of search bar -->
								<!-- shopping cart -->
								<div class="shopping-cart" id="shopping-cart">
									<a href="cart.php">
										<div class="cart-icon d-inline-block">
											<span class="icon_bag_alt"></span>
										</div>
										<?php if (isset($_SESSION['cartcount'])) {
											?>
										
										<div class="cart-info d-inline-block">
											<p>Shopping Cart 
												<span>
													<?php echo $_SESSION['cartcount']; ?> items - Rs.<?php echo $prices; ?> 
												</span>
											</p>
										</div>
									<?php } else{ ?>
										<div class="cart-info d-inline-block">
											<p>Shopping Cart 
												<span>
													0 items - Rs.0.00 
												</span>
											</p>
										</div>
									<?php } ?>
									</a>
								<!-- end of shopping cart -->
								
								<!-- cart floating box -->
								<div class="cart-floating-box" id="cart-floating-box">
									
									<div class="cart-items">
										<?php
										
								if ($resultcart->num_rows > 0) {
										
									    while($row = $resultcart->fetch_assoc())
									  {

									    
									     ?>
										<div class="cart-float-single-item d-flex">
											<span class="remove-item"><a id="<?php echo $row["product_id"]; ?>" href="javascript:void(0)" onClick="removetocart(this.id)"><i class="fa fa-times"></i></a></span>
											<div class="cart-float-single-item-image">
												<a><img src="<?php echo $row["image"]; ?>" class="img-fluid" alt=""></a>
											</div>
											<div class="cart-float-single-item-desc">
												<p class="product-title"> <a><?php echo $row["name"]; ?></a></p>
												<p class="price"><span class="count"><?php echo $row["quantity"]; ?> x </span> Rs.<?php echo $row["price"]; ?></p>
											</div>
										</div>
									<?php }
								}
								else{
								?>
									<div class="cart-float-single-item d-flex">
											<div class="cart-float-single-item-desc">
												<p class="product-title"> <a>No Item In Cart</a></p>
												
											</div>
										</div>
									<?php }
									?>
										
									</div>
									<?php if ($resultcart->num_rows > 0) { ?>
									<div class="cart-calculation">
										<div class="calculation-details">
											<p class="total">Subtotal <span>Rs.<?php echo $prices; ?></span></p>
										</div>
										<div class="floating-cart-btn text-center">
											<a href="checkout.php">Checkout</a>
											<a href="cart.php">View Cart</a>
										</div>
									</div>
								<?php }
								else{
								?>
								<div class="cart-calculation">
										
										<div class="floating-cart-btn text-center">
											<a href="shop.php">Go to Shop</a>
											
										</div>
									</div>
								<?php } ?>
								</div>
								<!-- end of cart floating box -->
								</div>
							</div>
							
							
							<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
							<script>

							function removetocart(id){
								var var_proid = id;
								
								$.ajax({
									url:"serverfiles/server.php",
									method:"POST",
									data:{removecart_proid : var_proid},
										
									success:function(data){
										$( ".shopping-cart" ).load( "shop.php .shopping-cart" );
										$( ".shopping-cart" ).load( "brands.php .shopping-cart" );
										$( ".shopping-cart" ).load( "shop-left-sidebar.php .shopping-cart" );
									}
								});
							}

							</script>

							<!--=============================================
							=            navigation menu         =
							=============================================-->
							
								<!-- navigation section -->
								<div class="main-menu main-menu-other-homepage">
									<nav>
										<ul>
											<li class="active menu"><a href="index.php">HOME</a>
											</li>
											<li class="menu-item"><a href="shop.php">Shop</a>
												
											</li>
											<!-- <li class="menu-item-has-children"><a href="#">PAGES</a>
												<ul class="mega-menu three-column">
													<li><a href="#">Column One</a>
														<ul>
															<li><a href="cart.php">Cart</a></li>
															<li><a href="checkout.php">Checkout</a></li>
															<li><a href="wishlist.html">Wishlist</a></li>
															
														</ul>
													</li>
													<li><a href="#">Column Two</a>
														<ul>
															<li><a href="my-account.html">My Account</a></li>
															<li><a href="login-register.html">Login Register</a></li>
															<li><a href="faq.html">FAQ</a></li>
														</ul>
													</li>
													<li><a href="#">Column Three</a>
														<ul>
															<li><a href="compare.html">Compare</a></li>
															<li><a href="contact.html">Contact</a></li>
														</ul>
													</li>
												</ul>
											</li> -->
											<!-- <li class="menu-item-has-children"><a href="#">BLOG</a>
												<ul class="sub-menu">
													<li><a href="blog-3-column.html">Blog 3 column</a></li>
													<li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
													<li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
													<li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
													<li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
													<li><a href="blog-post-left-sidebar.html">Blog Post Left Sidebar</a></li>
													<li><a href="blog-post-right-sidebar.html">Blog Post Right Sidebar</a></li>
													<li><a href="blog-post-image-format.html">Blog Post Image Format</a></li>
													<li><a href="blog-post-image-gallery.html">Blog Post Image Gallery Format</a></li>
													<li><a href="blog-post-audio-format.html">Blog Post Audio Format</a></li>
													<li><a href="blog-post-video-format.html">Blog Post Video Format</a></li>
												</ul>
											</li> -->
											<li><a href="contact.php">CONTACT</a></li>
										</ul>
									</nav>
								</div>
								<!-- end of navigation section -->
										
							<!--=====  End of navigation menu  ======-->
	
							
						</div>
						<div class="col-12">
							<!-- Mobile Menu -->
							<div class="mobile-menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>

			<!--=============================================
			=            navigation menu         =
			=============================================-->
			
			<div class="home-other-navigation-menu">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<!-- navigation section -->
							<div class="main-menu">
								<nav>
									<ul>
										<li><a href="index.php">HOME</a>
										</li>
										<li><a href="shop.php">Shop</a>
											
										</li>
										<!-- <li class="menu-item-has-children"><a href="#">PAGES</a>
											<ul class="mega-menu three-column">
												<li><a href="#">Column One</a>
													<ul>
														<li><a href="cart.php">Cart</a></li>
														<li><a href="checkout.php">Checkout</a></li>
														<li><a href="wishlist.html">Wishlist</a></li>
														
													</ul>
												</li>
												<li><a href="#">Column Two</a>
													<ul>
														<li><a href="my-account.html">My Account</a></li>
														<li><a href="login-register.html">Login Register</a></li>
														<li><a href="faq.html">FAQ</a></li>
													</ul>
												</li>
												<li><a href="#">Column Three</a>
													<ul>
														<li><a href="compare.html">Compare</a></li>
														<li><a href="contact.html">Contact</a></li>
													</ul>
												</li>
											</ul>
										</li> -->
										<!-- <li class="menu-item-has-children"><a href="#">BLOG</a>
											<ul class="sub-menu">
												<li><a href="blog-3-column.html">Blog 3 column</a></li>
												<li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
												<li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
												<li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
												<li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
												<li><a href="blog-post-left-sidebar.html">Blog Post Left Sidebar</a></li>
												<li><a href="blog-post-right-sidebar.html">Blog Post Right Sidebar</a></li>
												<li><a href="blog-post-image-format.html">Blog Post Image Format</a></li>
												<li><a href="blog-post-image-gallery.html">Blog Post Image Gallery Format</a></li>
												<li><a href="blog-post-audio-format.html">Blog Post Audio Format</a></li>
												<li><a href="blog-post-video-format.html">Blog Post Video Format</a></li>
											</ul>
										</li> -->
										<li><a href="contact.php">CONTACT</a></li>
									</ul>
								</nav>
							</div>
							<!-- end of navigation section -->
						</div>
					</div>
				</div>
			</div>
				
			<!--=====  End of navigation menu  ======-->

				
			</div>
	
			<!--=======  End of header bottom  =======-->


	</header>