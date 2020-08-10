
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
                        
                        <div class="cart-table table-responsive mb-40">
                            <table class="table">
                                <thead>
                                    <tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                <?php 
                                if (!empty($_SESSION['userid'])) 
                                {
                                    $token1 = $_SESSION['token'];
                                }
                                else
                                {
                                    $token1 =  $_SESSION['token1'];
                                }
                                
                                    
                                $resultIndicator = $_GET['resultIndicator'];
                                $successIndicator = $_SESSION["successIndicator"];

                                if($resultIndicator == $successIndicator){
                                    
                                /*$payment_mode = 'Card';
                                $ch = curl_init($base_url."api/OnlineOrders/UpdatePaymentStatus");
                                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                                curl_setopt($ch, CURLOPT_POST, true);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
                                'OrderID' => $_SESSION['ok2'],
                                'Status' => $payment_mode
                                )));
                                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    
                                $results=curl_exec ($ch);
                                curl_close ($ch);*/  
                                                      
                                if(!empty($resultIndicator)){    
                                $payment_mode = 'Card';  
                                $order_id = $_SESSION['order_id'];    
                                $data = [
                                    'OrderID' => $order_id,
                                    'Status' => $payment_mode
                                ];    
                                header('Content-Type: application/json'); 
                    $chz = curl_init($base_url."api/OnlineOrders/UpdatePaymentStatus?OrderID=$order_id&Status=$payment_mode"); 
                                $data = json_encode($data);
                                $authorization = "Authorization: Bearer ".$token1; 
                                curl_setopt($chz, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); 
                                curl_setopt($chz, CURLOPT_RETURNTRANSFER, true);
                                curl_setopt($chz, CURLOPT_POST, 1); 
                                curl_setopt($chz, CURLOPT_POSTFIELDS, $data); 
                                curl_setopt($chz, CURLOPT_FOLLOWLOCATION, 1); 
                                $resultz = curl_exec($chz); 
                                curl_close($chz);
                                $resultz . PHP_EOL; 
                                $resultz = json_decode($resultz, true);
                                $status = $resultz["ResponseCode"];
                                  
                                } 
                                    
                                if(isset($userid)){
                                    $emptycart = "DELETE from cart where user_id = '$userid'";
                                    $result = mysqli_query($db, $emptycart);}
                                if(isset($ip)){
                                    $emptycart = "DELETE from cart where user_id = '$ip'";
                                    $result = mysqli_query($db, $emptycart);} 
                                ?> 
                                    <tr>
                                        <td>
                                            <p>
                                                <?php
                                                    echo $_SESSION['ok'];
                                                    echo "<br/>";
                                                    echo $_SESSION['ok1'];
                                                    echo "<br/>";
                                                    echo $_SESSION['ok2'];
                                                    unset($_SESSION['ok']);
                                                    unset($_SESSION['ok1']);
                                                    unset($_SESSION['ok2']);
                                                    if(isset($_SESSION['payment_order'])){
                                                        unset($_SESSION['payment_order']);
                                                        unset($_SESSION['payment_fname']);
                                                        unset($_SESSION['payment_lname']);
                                                        unset($_SESSION['payment_amount']);
                                                        unset($_SESSION['payment_address']);
                                                        unset($_SESSION["successIndicator"]);
                                                    }
                                                ?>
                                            </p>
                                            <p>
                                                <?php
                                                    echo $_SESSION['st'];
                                                    unset($_SESSION['st']);
                                                    if(isset($_SESSION['payment_order'])){
                                                        unset($_SESSION['payment_order']);
                                                        unset($_SESSION['payment_fname']);
                                                        unset($_SESSION['payment_lname']);
                                                        unset($_SESSION['payment_amount']);
                                                        unset($_SESSION['payment_address']);
                                                        unset($_SESSION["successIndicator"]);
                                                    }
                                                ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php }?>
                                  
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
                        
                        <!--=======  End of cart table  =======-->
                        
                        
                   <!--  </form>	 -->
                    
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