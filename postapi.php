<?php 
session_start();
$db = mysqli_connect('localhost', 'ivhwrcgg_grocery', 'Grocery@123', 'ivhwrcgg_grocery');
//$db = mysqli_connect('localhost', 'root', '', 'clover');
//include('blocks/header.php');
$base_url = "https://uatmartapi.mangotech-erp.com/";
//$base_url = "https://api.clover-erp.com/";

if(isset($_SESSION['payment_order'])){
  unset($_SESSION['payment_order']);
  unset($_SESSION['payment_fname']);
  unset($_SESSION['payment_lname']);
  unset($_SESSION['payment_amount']);
  unset($_SESSION['payment_address']);
}

if(isset($_SESSION['successIndicator'])){
  unset($_SESSION['successIndicator']);
}

$flag = false;

$ip = $_SESSION['ip'];
$userid = $_SESSION['userid'];
if (isset($_POST['placeorder'])) {
  /*$prodids = array();
  $prodqty = array();
  $prodprice = array();
  $prodtotal = array();*/
  
  $PaymentMode = "";
  $payment_method = $_POST['payment_method'];
  if($payment_method == "payment_bank"){
    //$PaymentMode = "Card";
      $PaymentMode = "Pending"; // for testing purpose change payment mode 
  }
  else
  if($payment_method == "payment_cash"){
    $PaymentMode = "COD";
  }

  $AccountID = $_POST['AccountID'];
  $OrderDate = $_POST['OrderDate'];
  $TotalAmount = $_POST['TotalAmount'];
  $OrderMode = $_POST['OrderMode'];
  $ProductID = $_POST['ProductID'];
  $Qty = $_POST['Qty'];
  $SalePrice = $_POST['SalePrice'];
  $Total = $_POST['Total'];

  $bfname = $_POST['bfname'];
  $blname = $_POST['blname'];
  $bemail = $_POST['bemail'];
  $bphone = $_POST['bphone'];
  $baddress = $_POST['baddress'];
  /*if(isset($_POST['bcity'])){
    $bcity = $_POST['bcity'];
  }
  if(isset($_POST['bprovince'])){
  $bprovince = $_POST['bprovince'];
  }*/
  if(isset($_POST['blandline'])){
  $blandline = $_POST['blandline'];
  }

  $array_product = array(); 
  for($x = 0; $x < count($ProductID); $x++ )
  {
    for ($i=0; $i < count($ProductID) ; $i++) { 
        # code...

      $prodids = $ProductID[$i].",";
      $prodqty = $Qty[$i].",";
      $prodprice = $SalePrice[$i].",";
      $prodtotal = $Total[$i]*$Qty[$i].",";
      $array_product [$i]["ProductID"]= $ProductID[$i];
      $array_product [$i]["Qty"]= $Qty[$i];
      $array_product [$i]["SalePrice"]= $SalePrice[$i];
      $array_product [$i]["Total"]= $Total[$i]*$Qty[$i];
      /*echo $prodids."<br>";
      echo $prodqty."<br>";
      echo $prodprice."<br>";
      echo $prodtotal."<br>";*/
    }
  }
  /*var_dump($array_product);
  die();*/
  if (!empty($_SESSION['userid'])) {
    $AccountID = $_SESSION['userid'];
    $token = $_SESSION['token'];

    $data = [
      'AccountID' => $AccountID,
      'OrderDate' => $OrderDate,
      'TotalAmount' => $TotalAmount,
      'OrderMode' => $OrderMode,
      'OrderDetails' => $array_product,
      'PaymentMode' => $PaymentMode
    ];


    header('Content-Type: application/json'); 
    $chz = curl_init($base_url.'api/OnlineOrders/SaveOrder'); 
    $data = json_encode($data); 
    $authorization = "Authorization: Bearer ".$token; 
    curl_setopt($chz, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); 
    curl_setopt($chz, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($chz, CURLOPT_POST, 1); 
    curl_setopt($chz, CURLOPT_POSTFIELDS, $data); 
    curl_setopt($chz, CURLOPT_FOLLOWLOCATION, 1); 
    $resultz = curl_exec($chz); 
    curl_close($chz); 
    echo $resultz . PHP_EOL; 
    $resultz = json_decode($resultz, true);
    $status = $resultz["ResponseCode"];
    $order_no = $resultz["Data"];

    if ($status == 4001) {

 
      $order = "INSERT INTO orders (first_name, last_name, email, phone_no, address) 
      VALUES('$bfname', '$blname', '$bemail', '$bphone', '$baddress')";
      $result = mysqli_query($db, $order);
      if($result){
        $order_ids = $db->insert_id;
        if (!empty($order_ids)) {

          for($x = 0; $x < count($ProductID); $x++ )
          {
            $order_details = "INSERT INTO order_detail (order_id, user_id, product_id, quantity,  product_price, total_amount) 
            VALUES('$order_ids', '$AccountID', '$ProductID[$x]', '$Qty[$x]', '$SalePrice[$x]'*'$Qty[$x]', '$TotalAmount')";
            $resultd = mysqli_query($db, $order_details);
            if($resultd){

              if(isset($userid)){
                //$emptycart = "DELETE from cart where user_id = '$userid'";
                //if(mysqli_query($db, $emptycart)){
                  if($payment_method == "payment_bank"){
                    $_SESSION['ok'] = "Thank you For Order";
                    $_SESSION['ok1'] = "Your Order Successfully Places. We will contact you soon!";
                    $_SESSION['ok2'] = "your order_no is : ".$order_no;
                    $_SESSION['order_id'] = $order_no;
                    $flag = true;
                  }
                  else
                  if($payment_method == "payment_cash"){
                    $_SESSION['ok'] = "Thank you For Order";
                    $_SESSION['ok1'] = "We'll delivered you order and will contact you soon!";
                    $_SESSION['ok2'] = "your order_no is : ".$order_no;
                    $_SESSION['order_id'] = $order_no;
                    $flag = false;
                  }
               // } 
                /*else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                }*/
              }else
              if(isset($ip)){
                //$emptycart = "DELETE from cart where user_id = '$ip'";
                //if(mysqli_query($db, $emptycart)){
                  if($payment_method == "payment_bank"){
                    $_SESSION['ok'] = "Thank you For Order";
                    $_SESSION['ok1'] = "Your Order Successfully Places. We will contact you soon!";
                    $_SESSION['ok2'] = "your order_no is : ".$order_no;
                    $_SESSION['order_id'] = $order_no;
                    $flag = true;
                  }
                  else
                  if($payment_method == "payment_cash"){
                    $_SESSION['ok'] = "Thank you For Order";
                    $_SESSION['ok1'] = "We'll delivered you order and will contact you soon!";
                    $_SESSION['ok2'] = "your order_no is : ".$order_no;
                    $_SESSION['order_id'] = $order_no;
                    $flag = false;
                  }
                //} 
                /*else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                }*/
              }


            }

          }
        }
        else{
          header('location: checkout.php');
        }

      }
      else{
        array_push($errors, "Order Not Placed");
      }
      
      if($flag == true){
          $_SESSION['payment_order'] = $order_no;
          $_SESSION['payment_fname'] = $bfname;
          $_SESSION['payment_lname'] = $blname;
          $_SESSION['payment_amount'] = $TotalAmount;
          $_SESSION['payment_address'] = $baddress;
          header('location: payment.php');
      }else{ 
        $_SESSION['paymode'] = 'cod';
        header('location: orderplaced.php');
      }

    }
    elseif($status == 9999){
      $_SESSION['ok'] = "Something Went Wrong your order not placed";
      header('location: orderplaced.php');
    }
  }
  else{
    $headers = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';


    $ch = curl_init($base_url.'token');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    //  'UserName' => 'cogent',
    //  'Password' => '123456',
     'UserName' => 'mangotech',
     'Password' => 'mango@123',
     'grant_type' => 'password'
   )));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

    $result=curl_exec ($ch);
    curl_close ($ch);
    $result = json_decode($result, true);
    $token = $result["access_token"];
    $_SESSION['token1'] = $token; 

    $url = '';
    
    $guest_profile = array();
    $guest_profile['Name'] = $bfname." ".$blname;
    $guest_profile['Email'] = $bemail;
    $guest_profile['Address'] = $baddress;
    $guest_profile['Cell'] = $bphone;
    //$guest_profile['City'] = $bcity;
    //$guest_profile['Province'] = $bprovince;
    $guest_profile['Landline'] = $blandline;


    $data = [
      'AccountID' => $AccountID,
      'OrderDate' => $OrderDate,
      'TotalAmount' => $TotalAmount,
      'OrderMode' => $OrderMode,
      'OrderDetails' => $array_product,
      'GuestProfile' => $guest_profile,
      'PaymentMode' => $PaymentMode
    ];


    header('Content-Type: application/json'); 
    $chz = curl_init($base_url.'api/OnlineOrders/SaveOrder'); 
    $data = json_encode($data); 
    $authorization = "Authorization: Bearer ".$token; 
    curl_setopt($chz, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); 
    curl_setopt($chz, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($chz, CURLOPT_POST, 1); 
    curl_setopt($chz, CURLOPT_POSTFIELDS, $data); 
    curl_setopt($chz, CURLOPT_FOLLOWLOCATION, 1); 
    $resultz = curl_exec($chz); 
    curl_close($chz); 
    echo $resultz . PHP_EOL; 
    $resultz = json_decode($resultz, true);
    $status = $resultz["ResponseCode"];
    $order_no = $resultz["Data"];

    if ($status == 4001) {


      $order = "INSERT INTO orders (first_name, last_name, email, phone_no, address, city, state, country) 
      VALUES('$bfname', '$blname', '$bemail', '$bphone', '$baddress', '', '', '$blandline')";
      $result = mysqli_query($db, $order);
      if($result){
        $order_ids = $db->insert_id;
        if (!empty($order_ids)) {

          for($x = 0; $x < count($ProductID); $x++ )
          {
            $order_details = "INSERT INTO order_detail (order_id, user_id, product_id, quantity,  product_price, total_amount) 
            VALUES('$order_ids', 33, '$ProductID[$x]', '$Qty[$x]', '$SalePrice[$x]'*'$Qty[$x]', '$TotalAmount')";
            $resultd = mysqli_query($db, $order_details);
            if($resultd){

              if(isset($userid)){
                //$emptycart = "DELETE from cart where user_id = '$userid'";
                //if(mysqli_query($db, $emptycart)){
                  if($payment_method == "payment_bank"){
                    $_SESSION['ok'] = "Thank you For Order";
                    $_SESSION['ok1'] = "Your Order Successfully Places. We will contact you soon!";
                    $_SESSION['ok2'] = "your order_no is : ".$order_no;
                    $_SESSION['order_id'] = $order_no;
                    $flag = true;
                  }
                  else
                  if($payment_method == "payment_cash"){
                    $_SESSION['ok'] = "Thank you For Order";
                    $_SESSION['ok1'] = "We'll delivered you order and will contact you soon!";
                    $_SESSION['ok2'] = "your order_no is : ".$order_no;
                    $_SESSION['order_id'] = $order_no;
                    $flag = false;
                  }
                //} 
                /*else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                }*/
              }else
              if(isset($ip)){
                //$emptycart = "DELETE from cart where user_id = '$ip'";
                //if(mysqli_query($db, $emptycart)){
                  if($payment_method == "payment_bank"){
                    $_SESSION['ok'] = "Thank you For Order";
                    $_SESSION['ok1'] = "Your Order Successfully Places. We will contact you soon!";
                    $_SESSION['ok2'] = "your order_no is : ".$order_no;
                    $_SESSION['order_id'] = $order_no;
                    $flag = true;
                  }
                  else
                  if($payment_method == "payment_cash"){
                    $_SESSION['ok'] = "Thank you For Order";
                    $_SESSION['ok1'] = "We'll delivered you order and will contact you soon!";
                    $_SESSION['ok2'] = "your order_no is : ".$order_no;
                    $_SESSION['order_id'] = $order_no;
                    $flag = false;
                  }
                //} 
                /*else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                }*/
              }


            }

          }
        }
        else{
          header('location: checkout.php');
        }

      }
      else{
        array_push($errors, "Order Not Placed");
      }
      
      if($flag == true){
          $_SESSION['payment_order'] = $order_no;
          $_SESSION['payment_fname'] = $bfname;
          $_SESSION['payment_lname'] = $blname;
          $_SESSION['payment_amount'] = $TotalAmount;
          $_SESSION['payment_address'] = $baddress;
          header('location: payment.php');
      }else{ 
        $_SESSION['paymode'] = 'cod';  
        header('location: orderplaced.php');
      }

    }
    elseif($status == 9999){
      $_SESSION['ok'] = "Something Went Wrong your order not placed";
      header('location: orderplaced.php');
    }
  }
  



}
?>