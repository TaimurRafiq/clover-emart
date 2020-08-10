
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/vendor/script.js"></script>

</head>
<style>

.cart-table td.pro-quantity1 .pro-qty1 div.dec {
   bottom: 0;
    right: 0;
    border-left: 1px solid #ddd;
    padding-top: 2px;
    
}
</style>
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
                            <li class="active">Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php if (isset($_SESSION['successss'])) { ?>
        <div id="mydiv" class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        

                            <p><?php echo $_SESSION['successss'];
                             unset($_SESSION['successss']);?></p>
                        
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if (!empty($_SESSION['deletecart'])) { ?>
        <div id="mydiv" class="breadcrumb-area mb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-container">
                        

                            <p><?php echo $_SESSION['deletecart'];
                            unset($_SESSION['deletecart']); ?></p>
                        
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    
    <!--=====  End of breadcrumb area  ======-->
    

    <!--=============================================
    =            Cart page content         =
    =============================================-->
    

    <div class="page-section section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <!--  <form action="#"> -->				
                        <!--=======  cart table  =======-->
                        
                      
                        
                        <!--=======  End of cart table  =======-->
                        
                        
                   <!--  </form>	 -->
                        
                    <div class="row">
    
                        <div class="col-lg-9 col-12">
                            <!--=======  Calculate Shipping  =======-->
                          <div class="cart-table table-responsive mb-40">
                            <table id="reftable" class="table reftable">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                if ($resultcartd->num_rows > 0) {
                                        $i = 0;
                                        while($row = $resultcartd->fetch_assoc())
                                      {

                                        $i++;
                                         ?>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="<?php echo $row["image"]; ?>" class="img-fluid" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#"><?php echo $row["name"]; ?></a></td>
                                        <td class="pro-price"><span>Rs.<?php echo $row["price"]; ?></span></td>
                                        
                                        <input id="prod<?php echo $i; ?>" type="hidden" name="pi" value="<?php echo $row["product_id"]; ?>">

                                        <td class="pro-quantity1">
                                            <div class="pro-qty1">
                                                <input id="qty<?php echo $i; ?>" name="qty" type="text" value="<?php echo $row["quantity"]; ?>">
                                                <div class="inc qty-div-btn">+</div>
                                                <div class="dec qty-div-btn">-</div>
                                            </div>
                                        </td> 
                                        <td class="pro-subtotal"><span>Rs.<?php echo $row["price"]*$row["quantity"]; ?></span></td>
                                        <td class="pro-remove">
                                            <!--<button name="updcart" class="btnup" type="submit" title="update this item" style="display: inline;"><i class="fa fa-check"></i></button>-->
                                        
                                            <button id="<?php echo $row["product_id"]; ?>" onClick="deltocart(this.id)" title="Delete This Item" style="display: inline; margin-left: 5px;"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                                    <!-- <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/products/product02.jpg" class="img-fluid" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Auctor gravida pellentesque</a></td>
                                        <td class="pro-price"><span>$30.00</span></td>
                                        <td class="pro-quantity"><div class="pro-qty"><input type="text" value="2"></div></td>
                                        <td class="pro-subtotal"><span>$60.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/products/product03.jpg" class="img-fluid" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Condimentum posuere consectetur</a></td>
                                        <td class="pro-price"><span>$25.00</span></td>
                                        <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>
                                        <td class="pro-subtotal"><span>$25.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/products/product04.jpg" class="img-fluid" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Habitasse dictumst elementum</a></td>
                                        <td class="pro-price"><span>$11.00</span></td>
                                        <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>
                                        <td class="pro-subtotal"><span>$11.00</span></td>
                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>  
                            
                                
                            
                        </div>
    
                       
                        <div class="col-lg-3 col-12 d-flex">
                            <!--=======  Cart summery  =======-->
                        
                            <div class="cart-summary">
                                <div class="cart-summary-wrap">
                                    <h4>Cart Summary</h4>
                                    <p style="font-size:13px">Sub Total <span>Rs.<?php echo $prices; ?></span></p>
                                    <p style="font-size:13px">Shipping Cost <span>Rs.00.00</span></p>
                                    <h2 style="font-size:13px">Grand Total <span>Rs.<?php echo $prices; ?></span></h2>
                                </div>
                                <div class="cart-summary-button">
                                    <a href="checkout.php"><button class="checkout-btn">Proceed To Checkout</button></a>
                                    <a href="index.php"><button class="checkout-btn">Continue Shopping</button></a>
                                </div>
                            </div>
                        
                            <!--=======  End of Cart summery  =======-->
                            
                        </div>
    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!--=====  End of Cart page content  ======-->
	

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
        $('#mydiv').delay(1000).hide(500); 
    </script>

</body>

</html>

<!-- quantity inc des -->
<script type="text/javascript">

    $('.reftable').on('click','.qty-div-btn',function(e){
        e.preventDefault();
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below one
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find('input').val(newVal);
        
        /* update cart items script start */
        var row = $(this).closest("tr");
        row_no = row[0].rowIndex;

        var var_proid = $("#prod"+row_no).val();
        var var_qty = $("#qty"+row_no).val();
        //alert(var_qty);


        $.ajax({
            url:"serverfiles/server.php",
            method:"POST",
            data:{uptocart_proid : var_proid, qty : var_qty},
                
            success:function(data){
                $( ".shopping-cart" ).load( "cart.php .shopping-cart" );
                $( ".reftable" ).load( "cart.php .reftable" );
                $( ".cart-summary" ).load( "cart.php .cart-summary" );
            }
        });
        /* update cart items script end */
        
    });

</script>

<!-- update cart items -->
    <!--<script>

    $("table").on("click", "button.btnup", function () {
        var row = $(this).closest("tr");
        row_no = row[0].rowIndex;

        var var_proid = $("#prod"+row_no).val();
        var var_qty = $("#qty"+row_no).val();
        //alert(var_qty);


        $.ajax({
            url:"serverfiles/server.php",
            method:"POST",
            data:{uptocart_proid : var_proid, qty : var_qty},
                
            success:function(data){
                $( ".shopping-cart" ).load( "cart.php .shopping-cart" );
                $( ".reftable" ).load( "cart.php .reftable" );
                $( ".cart-summary" ).load( "cart.php .cart-summary" );
            }
        });
    });

    </script>-->

    <!-- delete cart items -->
    <script>

    function deltocart(id){
        var var_proid = id;
        
        $.ajax({
            url:"serverfiles/server.php",
            method:"POST",
            data:{removecart_proid : var_proid},
                
            success:function(data){
                $( ".shopping-cart" ).load( "cart.php .shopping-cart" );
                $( ".reftable" ).load( "cart.php .reftable" );
                $( ".cart-summary" ).load( "cart.php .cart-summary" );
            }
        });
    }

    </script>