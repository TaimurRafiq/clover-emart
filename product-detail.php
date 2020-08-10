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

<?php
        $productid = $_GET['product_id'];
        



                    $curl = curl_init();
                    
                    curl_setopt_array($curl, array(
                      CURLOPT_URL => $base_url."api/Products/GetProductByID?ProductID=$productid",
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

                    /*print_r($datab);
                    die();
*/
                   
    ?>

    <!--=====  End of Header  ======-->
    
    <!--=============================================
    =            breadcrumb area         =
    =============================================-->
    <?php foreach ($datab as  $value) {
                                            ?>
    <div class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#"><?php echo $value['Category']; ?></a></li>
                            <li><a href="#"><?php echo $value['BRandTitle']; ?></a></li>
                            <li class="active"><?php echo $value['ProductName']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!--=====  End of breadcrumb area  ======-->

    <!--=============================================
    =            single product content         =
    =============================================-->
    
    <div class="single-product-content ">
        <div class="container">
            <!--=======  single product content container  =======-->
            <?php foreach ($datab as  $value) {
                $brdid = $value["BrandID"];
                                            ?>
            <div class="single-product-content-container mb-35">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12"> 

                        
                                    <!-- product image gallery -->
                                    <div class="product-image-slider d-flex flex-custom-xs-wrap flex-sm-nowrap align-items-center mb-sm-35">
                                        <!--Modal Tab Menu Start-->
                                        <!-- <div class="product-small-image-list"> 
                                            <div class="nav small-image-slider-single-product" role="tablist">
                                            <div class="single-small-image img-full">
                                                <a data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="assets/images/big-product-image/product04.jpg"
                                                class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="single-small-image img-full">
                                                <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="assets/images/big-product-image/product05.jpg"
                                                    class="img-fluid" alt=""></a>
                                                </div>
                                            <div class="single-small-image img-full">
                                                <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="assets/images/big-product-image/product06.jpg"
                                                    class="img-fluid" alt=""></a>
                                                </div>
                                                <div class="single-small-image img-full">
                                                    <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="assets/images/big-product-image/product07.jpg"
                                                    class="img-fluid" alt=""></a>
                                                </div>
                                            </div>
                                           </div> -->
                                           <!--Modal Tab Menu End-->
                                           
                                           
                                        <!--Modal Tab Content Start-->
                                        <div class="tab-content product-large-image-list">
                                            <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                                <!--Single Product Image Start-->
                                                <div class="single-product-img easyzoom img-full">
                                                    <img src="http://product.mangotech-erp.com/<?php echo $value['ImageUrl']; ?>" class="img-fluid img-size" alt="">
                                                    <a href="http://product.mangotech-erp.com/<?php echo $value['ImageUrl']; ?>" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                                <!--Single Product Image End-->
                                            </div>
                                            <!-- <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                               
                                                <div class="single-product-img easyzoom img-full">
                                                    <img src="assets/images/big-product-image/product05.jpg" class="img-fluid" alt="">
                                                    <a href="assets/images/big-product-image/product05.jpg" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                                
                                            </div> -->
                                            <!-- <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                                               
                                                <div class="single-product-img easyzoom img-full">
                                                    <img src="assets/images/big-product-image/product06.jpg" class="img-fluid" alt="">
                                                    <a href="assets/images/big-product-image/product06.jpg" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                               
                                            </div> -->
                                            <!-- <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                                
                                                <div class="single-product-img easyzoom img-full">
                                                    <img src="assets/images/big-product-image/product07.jpg" class="img-fluid" alt="">
                                                    <a href="assets/images/big-product-image/product07.jpg" class="big-image-popup"><i class="fa fa-search-plus"></i></a>
                                                </div>
                                                
                                            </div> -->
                                        </div>
                                        <!--Modal Content End-->

                                    </div>
                                    <!-- end of product image gallery -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                    <!-- product quick view description -->
                                    <div class="product-feature-details">
                                        <h2 class="product-title mb-15"><?php echo $value['ProductName']; ?></h2>

                                        <!-- <p class="product-rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>

                                            <a href="#">(1 customer review)</a>
                                        </p> -->
                                        <h4 class="mb-15">
                                            <span class="discounted-price"><?php echo $value['UnitCode']; ?></span>
                                        </h4>
                                        <h2 class="product-price mb-15"> 
                                            
                                            <span class="discounted-price">Rs.<?php echo $value['SaleRate']; ?></span>
                                        </h2>
                                        
                                        <!-- <p class="product-description mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p> -->
                                        
                                        
                                        <div class="cart-buttons mb-20">
                                            <div class="pro-qty mr-20 mb-xs-20">
                                                <input type="text" id="qty" value="1">
                                            </div>
                                            
                                            <div class="add-to-cart-btn">
                                                <input type="hidden" id="proid" name="proid" value="<?php echo $value['ProductID']; ?>">
                                            <input type="hidden" id="name" name="name" value="<?php echo $value['ProductName']; ?>">
                                            <input type="hidden" id="price" name="price" value="<?php echo $value['SaleRate']; ?>">
                                            <input type="hidden" id="imageurl" name="imageurl" value="http://product.mangotech-erp.com/<?php echo $value['ImageUrl']; ?>">
                                            <input type="hidden" name="cattid" value="<?php echo $catid; ?>">
                                                <a><button title="Add To Cart" onClick="addtocart()" style="border: none;background-color: Transparent;overflow: hidden;outline:none;"><i class="fa fa-shopping-cart"></i> Add to Cart</button></a>
                                            </div>
                                        </div>

                                        <!-- <div class="single-product-action-btn mb-20">
                                            <a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> Add to wishlist</a>
                                            <a href="#" data-tooltip="Add to compare"> <span class="arrow_left-right_alt"></span> Add to compare</a>
                                        </div> -->


                                        <div class="single-product-category mb-20">
                                            <h3>Categories: <span><a href="shop-left-sidebar.php"><?php echo $value['BRandTitle']; ?></a>, <a href="shop-left-sidebar.php"><?php echo $value['Category']; ?></a></span></h3>
                                        </div>
                                        
                                        
                                        <!-- <div class="social-share-buttons">
                                            <h3>share this product</h3>
                                            <ul>
                                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <!-- end of product quick view description -->
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--=======  End of single product content container  =======-->
                        
                    </div>
                    
                </div>
                
                <!--=====  End of single product content  ======-->

    <!--=============================================
    =            single product tab         =
    =============================================-->
    
    <!-- <div class="single-product-tab-section mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-slider-wrapper">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                                aria-selected="true">Description</a>
                                <a class="nav-item nav-link" id="features-tab" data-toggle="tab" href="#features" role="tab"
                                aria-selected="false">Features</a>
                                <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                                aria-selected="false">Reviews (3)</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <p class="product-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque obcaecati tempore reiciendis neque facere! Eos, necessitatibus? Fugit iure veritatis quidem velit quaerat quos qui pariatur dolore facilis, aliquid quae voluptatibus dicta. Quae harum velit hic molestias, eius ab cum quidem voluptates modi maiores laboriosam iusto excepturi ex, recusandae aut, facere earum ad vero aperiam. Minima dolores dignissimos ab ipsam atque placeat sapiente officia debitis nobis porro at quia veritatis, quidem id repudiandae ex tempore non. Enim soluta explicabo atque adipisci itaque.</p>
                            </div>
                            <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
                                <table class="table-data-sheet">
                                    <tbody>
                                        <tr class="odd">

                                            <td>Name</td>
                                            <td>Kaoreet lobortis sagittis laoreet</td>
                                        </tr>
                                        <tr class="even">

                                            <td>Color</td>
                                            <td>Yellow</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="product-ratting-wrap">
                                    <div class="pro-avg-ratting">
                                        <h4>4.5 <span>(Overall)</span></h4>
                                        <span>Based on 9 Comments</span>
                                    </div>
                                    <div class="ratting-list">
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(3)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(1)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(0)</span>
                                        </div>
                                        <div class="sin-list float-left">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="rattings-wrapper">

                                        <div class="sin-rattings">
                                            <div class="ratting-author">
                                                <h3>Cristopher Lee</h3>
                                                <div class="ratting-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>(5)</span>
                                                </div>
                                            </div>
                                            <p>enim ipsam voluptatem quia voluptas sit
                                                aspernatur aut odit aut fugit, sed quia res eos
                                                qui ratione voluptatem sequi Neque porro
                                                quisquam est, qui dolorem ipsum quia dolor sit
                                            amet, consectetur, adipisci veli</p>
                                        </div>

                                        <div class="sin-rattings">
                                            <div class="ratting-author">
                                                <h3>Nirob Khan</h3>
                                                <div class="ratting-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>(5)</span>
                                                </div>
                                            </div>
                                            <p>enim ipsam voluptatem quia voluptas sit
                                                aspernatur aut odit aut fugit, sed quia res eos
                                                qui ratione voluptatem sequi Neque porro
                                                quisquam est, qui dolorem ipsum quia dolor sit
                                            amet, consectetur, adipisci veli</p>
                                        </div>

                                        <div class="sin-rattings">
                                            <div class="ratting-author">
                                                <h3>MD.ZENAUL ISLAM</h3>
                                                <div class="ratting-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <span>(5)</span>
                                                </div>
                                            </div>
                                            <p>enim ipsam voluptatem quia voluptas sit
                                                aspernatur aut odit aut fugit, sed quia res eos
                                                qui ratione voluptatem sequi Neque porro
                                                quisquam est, qui dolorem ipsum quia dolor sit
                                            amet, consectetur, adipisci veli</p>
                                        </div>

                                    </div>
                                    <div class="ratting-form-wrapper fix">
                                        <h3>Add your Comments</h3>
                                        <form action="#">
                                            <div class="ratting-form row">
                                                <div class="col-12 mb-15">
                                                    <h5>Rating:</h5>
                                                    <div class="ratting-star fix">
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12 mb-15">
                                                    <label for="name">Name:</label>
                                                    <input id="name" placeholder="Name" type="text">
                                                </div>
                                                <div class="col-md-6 col-12 mb-15">
                                                    <label for="email">Email:</label>
                                                    <input id="email" placeholder="Email" type="text">
                                                </div>
                                                <div class="col-12 mb-15">
                                                    <label for="your-review">Your Review:</label>
                                                    <textarea name="review" id="your-review"
                                                    placeholder="Write a review"></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <input value="add review" type="submit">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <!--=====  End of single product tab  ======-->
    
    <!--=============================================
	=            Related Product slider         =
	=============================================-->
	<?php
    if(!empty($brdid)){
     $curl = curl_init();
                    
                    curl_setopt_array($curl, array(
                      CURLOPT_URL => $base_url."api/Products/GetProducts?BrandID=$brdid&CategoryID=null&pageNumber=1&pageSize=10&isPagination=false",
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

                    $i = 0;
                   
    }
    else{
        print_r("No Data");
        die();
    }
    ?>
	<div class="slider related-product-slider mb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                 
                    
                    <div class="section-title">
                        <h3>Related Product</h3>
                    </div>
                    
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                    
                    <div class="related-product-slider-wrapper">
                        
                        <?php foreach ($datac as $valuec) { ?>
                        <div class="gf-product related-slider-product">
                            <div class="image">
                                
                                    
                                    <img src="<?php echo $valuec['ImageUrl']; ?>" class="img-fluid img-size" alt="">
                                <?php $i++; ?>
                                <div class="product-hover-icons">
                                    <input type="hidden" id="proid<?php echo $i; ?>" name="proid" value="<?php echo $valuec['ProductID']; ?>">
                                            <input type="hidden" id="name<?php echo $i; ?>" name="name" value="<?php echo $valuec['ProductName']; ?>">
                                            <input type="hidden" id="price<?php echo $i; ?>" name="price" value="<?php echo $valuec['SaleRate']; ?>">
                                            <input type="hidden" id="imageurl<?php echo $i; ?>" name="imageurl" value="<?php echo $valuec['ImageUrl']; ?>">
                                            
                                            <button id="<?php echo $i; ?>" title="Add To Cart" onClick="addtocartr(this.id)" name="addcart" style="border: none;background-color: Transparent;overflow: hidden;outline:none;">
                                                <a href="javascript:void(0)" data-tooltip="Add to cart"><span class="icon_cart_alt"></span></a>
                                            </button>

                                    
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-categories">
                                    <a href="#"><?php echo $valuec['BRandTitle']; ?></a>,
                                    <a href="#"><?php echo $valuec['Category']; ?></a>

                                </div>
                                <h3 class="product-title" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap; "><a style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap; " href="product-detail.php?product_id=<?php echo $valuec['ProductID']; ?>"><?php echo $valuec['ProductName']; ?></a></h3>
                                <div class="price-box">
                                    <!--<span class="main-price">Rs.<?php //echo $valuec['SaleRate']; ?></span>-->
                                    <span class="discounted-price">Rs.<?php echo $valuec['SaleRate']; ?></span>

                                </div>
                            </div>
                            <h5><?php echo $valuec['UnitCode']; ?></h5>
                            <div class="pro-qty mb-xs-20">
                                        <input type="text" id="qty<?php echo $i; ?>" name="qty" value="1">
                                        <a href="#" class="inc qty-btn">+</a>
                                        <a href="#" class="dec qty-btn">-</a>
                                    </div>

                        </div>
                    <?php } ?>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of Related product slider  ======-->	
    
    <!--=============================================
	=            Upsell Product slider         =
	=============================================-->
	
	<!-- <div class="slider related-product-slider mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    
                    <div class="section-title">
                        <h3>Upsell Product</h3>
                    </div>
                    
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   
                    
                    <div class="related-product-slider-wrapper">
                       
                        
                        <div class="gf-product related-slider-product">
                            <div class="image">
                                <a href="single-product.php">
                                    <span class="onsale">Sale!</span>
                                    <img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="product-hover-icons">
                                    <a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
                                    <a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
                                    <a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
                                    <a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-categories">
                                    <a href="shop-left-sidebar.php">Fast Foods</a>,
                                    <a href="shop-left-sidebar.php">Vegetables</a>
                                </div>
                                <h3 class="product-title"><a href="single-product.php">Ornare sed consequat nisl eget</a></h3>
                                <div class="price-box">
                                    <span class="main-price">$89.00</span>
                                    <span class="discounted-price">$80.00</span>
                                </div>
                            </div>
                            <h5>1 Kg(s)</h5>
                        </div>
                        
                       
                        
                        <div class="gf-product related-slider-product">
                            <div class="image">
                                <a href="single-product.php">
                                    <span class="onsale">Sale!</span>
                                    <img src="assets/images/products/product02.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="product-hover-icons">
                                    <a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
                                    <a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
                                    <a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
                                    <a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-categories">
                                    <a href="shop-left-sidebar.php">Fast Foods</a>,
                                    <a href="shop-left-sidebar.php">Vegetables</a>
                                </div>
                                <h3 class="product-title"><a href="single-product.php">Ornare sed consequat nisl eget</a></h3>
                                <div class="price-box">
                                    <span class="main-price">$89.00</span>
                                    <span class="discounted-price">$80.00</span>
                                </div>
                            </div>
                            <h5>1 Kg(s)</h5>
                        </div>
                        
                       
                        
                        <div class="gf-product related-slider-product">
                            <div class="image">
                                <a href="single-product.php">
                                    <span class="onsale">Sale!</span>
                                    <img src="assets/images/products/product03.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="product-hover-icons">
                                    <a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
                                    <a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
                                    <a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
                                    <a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-categories">
                                    <a href="shop-left-sidebar.php">Fast Foods</a>,
                                    <a href="shop-left-sidebar.php">Vegetables</a>
                                </div>
                                <h3 class="product-title"><a href="single-product.php">Ornare sed consequat nisl eget</a></h3>
                                <div class="price-box">
                                    <span class="main-price">$89.00</span>
                                    <span class="discounted-price">$80.00</span>
                                </div>
                            </div>
                            <h5>1 Kg(s)</h5>
                        </div>
                        
                        
                        
                        <div class="gf-product related-slider-product">
                            <div class="image">
                                <a href="single-product.php">
                                    <span class="onsale">Sale!</span>
                                    <img src="assets/images/products/product04.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="product-hover-icons">
                                    <a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
                                    <a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
                                    <a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
                                    <a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-categories">
                                    <a href="shop-left-sidebar.php">Fast Foods</a>,
                                    <a href="shop-left-sidebar.php">Vegetables</a>
                                </div>
                                <h3 class="product-title"><a href="single-product.php">Ornare sed consequat nisl eget</a></h3>
                                <div class="price-box">
                                    <span class="main-price">$89.00</span>
                                    <span class="discounted-price">$80.00</span>
                                </div>
                            </div>
                            <h5>1 Kg(s)</h5>
                        </div>
                        
                        
                        
                        <div class="gf-product related-slider-product">
                            <div class="image">
                                <a href="single-product.php">
                                    <span class="onsale">Sale!</span>
                                    <img src="assets/images/products/product05.jpg" class="img-fluid" alt="">
                                </a>
                                <div class="product-hover-icons">
                                    <a href="#" data-tooltip="Add to cart"> <span class="icon_cart_alt"></span></a>
                                    <a href="#" data-tooltip="Add to wishlist"> <span class="icon_heart_alt"></span> </a>
                                    <a href="#" data-tooltip="Compare"> <span class="arrow_left-right_alt"></span> </a>
                                    <a href="#" data-tooltip="Quick view" data-toggle = "modal" data-target="#quick-view-modal-container"> <span class="icon_search"></span> </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-categories">
                                    <a href="shop-left-sidebar.php">Fast Foods</a>,
                                    <a href="shop-left-sidebar.php">Vegetables</a>
                                </div>
                                <h3 class="product-title"><a href="single-product.php">Ornare sed consequat nisl eget</a></h3>
                                <div class="price-box">
                                    <span class="main-price">$89.00</span>
                                    <span class="discounted-price">$80.00</span>
                                </div>
                            </div>
                            <h5>1 Kg(s)</h5>
                        </div>
                        
                       
                        
                    </div>
                    
                   
                </div>
            </div>
        </div>
    </div> -->
    
    <!--=====  End of Upsell product slider  ======-->	

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
                                    <div class="tab-pane fade show active" id="single-slide-quick-1" role="tabpanel" aria-labelledby="single-slide-tab-quick-1">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="assets/images/products/product01.jpg" class="img-fluid" alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                    <div class="tab-pane fade" id="single-slide-quick-2" role="tabpanel" aria-labelledby="single-slide-tab-quick-2">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="assets/images/products/product02.jpg" class="img-fluid" alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                    <div class="tab-pane fade" id="single-slide-quick-3" role="tabpanel" aria-labelledby="single-slide-tab-quick-3">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="assets/images/products/product03.jpg" class="img-fluid" alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                    <div class="tab-pane fade" id="single-slide-quick-4" role="tabpanel" aria-labelledby="single-slide-tab-quick-4">
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
                                            <a data-toggle="tab" id="single-slide-tab-quick-1" href="#single-slide-quick-1"><img src="assets/images/products/product01.jpg"
                                                class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="single-small-image img-full">
                                                <a data-toggle="tab" id="single-slide-tab-quick-2" href="#single-slide-quick-2"><img src="assets/images/products/product02.jpg"
                                                    class="img-fluid" alt=""></a>
                                                </div>
                                                <div class="single-small-image img-full">
                                                    <a data-toggle="tab" id="single-slide-tab-quick-3" href="#single-slide-quick-3"><img src="assets/images/products/product03.jpg"
                                                        class="img-fluid" alt=""></a>
                                                    </div>
                                                    <div class="single-small-image img-full">
                                                        <a data-toggle="tab" id="single-slide-tab-quick-4" href="#single-slide-quick-4"><img src="assets/images/products/product04.jpg"
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


function addtocartr(id){
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



function addtocart(){
    var var_proid = $("#proid").val();
    var var_name = $("#name").val();
    var var_price = $("#price").val();
    var var_imageurl = $("#imageurl").val();
    var var_qty = $("#qty").val();
    $.ajax({
        url:"serverfiles/server.php",
        method:"POST",
        data:{addcart_proid : var_proid,name : var_name,price : var_price,
            imageurl : var_imageurl,qty : var_qty},
            
        success:function(data){
            $( ".shopping-cart" ).load( "shop-left-sidebar.php .shopping-cart" );
            
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

<script>

$(document).ready(function(){
    if($('ul#brandList li').length >= 11){
        var more = $('<li class="more"><a href="">Show more</a></li>');
        var less = $('<li class="less" ><a href="">Show less</a></li>');

        $('ul#brandList').children('li:gt(9)').hide();
        $('ul#brandList').append(more);

        $('body').on('click','.more',function(e){
            e.preventDefault();
            $(this).remove();    
            $('ul#brandList').children().show();
            $('ul#brandList').append(less);
            return false;
        });

        $('body').on('click','.less',function(e){
            e.preventDefault();
            $(this).remove();
            $('ul#brandList').children('li:gt(9)').hide();
            $('ul#brandList').append(more);
            return false;
       });
    }
});

</script>