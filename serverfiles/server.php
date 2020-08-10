<?php
session_start();
error_reporting(0);
// initializing variables
$firstname = "";
$lastname = "";
$username = "";
$email    = "";
$errors = array(); 

$base_url = "https://uatmartapi.mangotech-erp.com/";
//$base_url = "https://api.clover-erp.com/";
 function regenerate() {
    $_SESSION['code'] = uniqid();
    $_SESSION['code_time'] = time();
}

if (empty($_SESSION['code']) || time() - $_SESSION['code_time'] > 86400)
    //if there's no code, or the code has expired
    regenerate();
// connect to the database
$db = mysqli_connect('localhost', 'ivhwrcgg_grocery', 'Grocery@123', 'ivhwrcgg_grocery');
//$db = mysqli_connect('localhost', 'root', '', 'clover');
$userid = $_SESSION['userid'];


/////////////////////////////////////////////////////////////////////////////
         $ip = $_SESSION['code_time'];
         $_SESSION['ip'] = $ip;
         


//new uploaded
if(isset($_SESSION['userid'])){
  //cart count
  $queryc = "select count(id)as count,sum(price*quantity)as prices from cart where user_id = '".$_SESSION['userid']."'";
  $resultc = $db->query($queryc);
  $fetch = $resultc->fetch_assoc();
  $count = $fetch["count"];
  $prices = $fetch["prices"];
  $prices = number_format((float)$prices, 1, '.', '');

  //cartitems
  $cartquery="select * from cart where user_id = '".$_SESSION['userid']."'";
  $resultcart = $db->query($cartquery);

  //cart sum
  /*$queryp = "select sum(price*quantity)as prices from cart where user_id = '".$_SESSION['userid']."'";
  $resultp = $db->query($queryp);
  $prices = $resultp->fetch_assoc()["prices"];
  $prices = number_format((float)$prices, 1, '.', '');*/

  //cartitems detail
  $cartqueryd="select * from cart where user_id = '".$_SESSION['userid']."'";
  $resultcartd = $db->query($cartqueryd);

  $cartqueryc="select * from cart where user_id = '".$_SESSION['userid']."'";
  $resultcartc = $db->query($cartqueryc);
 
}else{
  //cart count
  $queryc = "select count(id)as count,sum(price*quantity)as prices from cart where user_id = '".$ip."'";
  $resultc = $db->query($queryc);
  $fetch = $resultc->fetch_assoc();
  $count = $fetch["count"];
  $prices = $fetch["prices"];
  $prices = number_format((float)$prices, 1, '.', '');
  

  //cartitems
  $cartquery="select * from cart where user_id = '".$ip."'";
  $resultcart = $db->query($cartquery);

  //cart sum
  /*$queryp = "select sum(price*quantity)as prices from cart where user_id = '$ip'";
  $resultp = $db->query($queryp);
  $prices = $resultp->fetch_assoc()["prices"];
  $prices = number_format((float)$prices, 1, '.', '');*/

  //cartitems detail
  $cartqueryd="select * from cart where user_id = '$ip'";
  $resultcartd = $db->query($cartqueryd);

  $cartqueryc="select * from cart where user_id = '$ip'";
  $resultcartc = $db->query($cartqueryc);
}
//end new uploaded
/////////////////////////////////////////////////////////////////////////////
$_SESSION['cartcount'] = $count;


$delete_id = $_GET['delete_id'];

if (!empty($delete_id)) {
  $sql = "DELETE FROM cart WHERE product_id=$delete_id";

  if(mysqli_query($db, $sql)){
    $_SESSION['deletecart'] =  "Product were deleted successfully.";
    unset($_SESSION['successss']);
    header('location: ../cart.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}
$deletes_id = $_GET['deletes_id'];

if (!empty($deletes_id)) {
  $sql = "DELETE FROM cart WHERE product_id=$deletes_id";

  if(mysqli_query($db, $sql)){
    $_SESSION['deletecart'] =  "Product were deleted successfully.";
    unset($_SESSION['successss']);
    header('location: ../index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}

/*if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
                  {
                    $ip=$_SERVER['HTTP_CLIENT_IP'];
                  }
                  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
                  {
                    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
                  }
                  else
                  {
                    $ip=$_SERVER['SERVER_SIGNATURE'];
                  }*/




// //cart count
// $queryc = "select count(id)as count from cart where user_id = '$ip'";
// $resultc = $db->query($queryc);
// $count = $resultc->fetch_assoc()["count"];

// //cart sum
// $queryp = "select sum(price*quantity)as prices from cart where user_id = '$ip'";
// $resultp = $db->query($queryp);
// $prices = $resultp->fetch_assoc()["prices"];

// //cartitems
// $cartquery="select * from cart where user_id = '$ip'";
//   $resultcart = $db->query($cartquery);

// //cartitems detail
// $cartqueryd="select * from cart where user_id = '$ip'";
//   $resultcartd = $db->query($cartqueryd);

// $cartqueryc="select * from cart where user_id = '$ip'";
// $resultcartc = $db->query($cartqueryc);

// //cart update ajax
// if (isset($_POST['updcart'])) {
//   $uid = $_POST['pi'];
//   $qtt = $_POST['qty'];

//   $upd = "UPDATE cart SET quantity = '".$qtt."' where product_id = '".$uid."'";
//   $resultu = mysqli_query($db, $upd);
//   if ($resultu) {
//     $_SESSION['successss'] =  "Product were Updated sssuccessfully.";
//     header('location:'.$_SERVER['PHP_SELF']);

//   }
//   else{
//     $_SESSION['successss'] = 'not updated';
//     header('location'.$_SERVER['PHP_SELF']);
//   }

// }


/*$cartquery = "select * from cart where user_id = '$userid'";
$resultcart = $db->query($cartquery);
$cartitems = $resultcart->fetch_assoc();*/
//echo $count;
///$_SESSION['cartcount'] = $count;

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  //$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  //$username = mysqli_real_escape_string($db, $_POST['username']);
  //$username = $firstname." ".$lastname;

  

  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $cell = mysqli_real_escape_string($db, $_POST['cell']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
//   if (empty($phone)) { array_push($errors, "Phone Number is required"); }
  if (empty($cell)) { array_push($errors, "Cell Number is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($city)) { array_push($errors, "City is required"); }
//   if (empty($state)) { array_push($errors, "State is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($password_2)) { array_push($errors, "Confirm Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  if(empty($errors)){
      $ch = curl_init($base_url."api/Account/Register");
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
       'Email' => $email,
       'Password' => $password_1,
       'ConfirmPassword' => $password_2,
       'Name' => $firstname,
       'Phone' => $phone,
       'Cell' => $cell,
       'Address' => $address,
       'City' => $city,
       'Province' => $state
     )));
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    
      $results=curl_exec ($ch);
      curl_close ($ch);
      $results = json_decode($results, true);
      /*var_dump($result);
      exit;*/
      $status = $results["ResponseCode"];
      
      $message = $results["Message"];
      //$invalid = $result["ModelState"];
    
      if ($status === 5001) {
        unset($_SESSION['registere']);
        $_SESSION['registere'] = $results["Message"]."Please Login";
        header('location: login-register.php');
        die();
      }
      else {
        unset($_SESSION['registere']);
        $_SESSION['registere'] = "Email Already Taken";
        header('location: login-register.php');
      }
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  /*$user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }*/

  // Finally, register user if there are no errors in the form
  /*if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (first_name, last_name, username, email, password) 
          VALUES('$firstname', '$lastname', '$username', '$email', '$password')";
    $result = mysqli_query($db, $query);
    if($result){
      $_SESSION['username'] = $username;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
    }
    else{
      array_push($errors, "not register");
    }
    
  }*/
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }




  if (count($errors) == 0) {

  $ch = curl_init($base_url."token");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
   'UserName' => $email,
   'Password' => $password,
   'grant_type' => 'password'
 )));
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

  $result=curl_exec ($ch);
  curl_close ($ch);


  $result = json_decode($result, true);
  $error = $result["error_description"];
  $usernameg = $result["userName"];
  $acid = $result["AccountID"];

  if (!empty($error)) {
    $_SESSION['error'] = $error;
  }
   elseif(!empty($acid)){
      
       $new_data = "Select * from cart where user_id='$ip'";
       $resultN = $db->query($new_data); 
      
       $rows = array();
       while($value = mysqli_fetch_array($resultN))
       $rows[] = $value;
      
       foreach($rows as $value){
       $prodID = $value['product_id'];
       $quantity =  $value['quantity'];
       $price = $value['price'];
           
       $old_data = "Select * from cart where user_id='$acid' and product_id = '$prodID'";
       $resultO = $db->query($old_data);
       $fetch = mysqli_fetch_assoc($resultO);
        
        if(mysqli_num_rows($resultO) != 0){   
       $updateQ = $fetch['quantity'] + $quantity;
       $updateP = $fetch['price'] + $price;
        
       $update_cart = "UPDATE cart SET quantity='$updateQ' WHERE user_id='$acid' and product_id = '$prodID'"; //update guest cart when user login
       $resultcart = $db->query($update_cart);
            
       $del = "delete from cart where user_id='$ip' and product_id = '$prodID'";
       $res = $db->query($del);
        }
       }
       $update_cart = "UPDATE cart SET user_id='$acid' WHERE user_id='$ip'"; //update guest cart when user login
       $resultcart = $db->query($update_cart);  
  
       $_SESSION['userid'] = $acid;
       $_SESSION["token"] = $result["access_token"];
       $_SESSION['userid'] = $acid;
    
       $_SESSION['username'] = $usernameg;
    
    header('location: index.php');
  }
    /*$password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      while ($row = $results->fetch_object()) {
        $_SESSION['userid'] = $row->id;
        $_SESSION['username'] = $row->username;
        }
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }*/
  }
}


//order detail show
if(isset($_POST['user_orderid'])) {
  $user_orderid = $_POST['user_orderid'];

  $acc1 = $_SESSION['userid'];

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => $base_url."api/OnlineOrders/GetMyOrders?AccountID=".$acc1,
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
  $datap = $response["Data"];

  $datapro = array();
  foreach ($datap as $value) {   
      if($value['OrderID'] == $user_orderid){
          foreach ($value['OrderDetails'] as $value1) {
            $datapro[] = $value1;
          }
      }
  }

  echo json_encode($datapro);

}


//new updated

//cart item add
if(isset($_POST['addcart_proid'])) {
  $proid = $_POST['addcart_proid'];
  $name = $_POST['name'];
  $name = addslashes($name);    // skip 's in data
  $price = $_POST['price'];
  $imageurl = $_POST['imageurl'];
  $imageurl = addslashes($imageurl);    // skip 's in data
  $qty = $_POST['qty'];
 
  $user_id = "";
  if(isset($_SESSION['userid'])){
    $user_id = $_SESSION['userid'];
  }
  else{
    if (!empty($ip)) {
      $user_id = $ip;
    }
  }

  $quer0=mysqli_query($db,"SELECT * FROM cart WHERE product_id='$proid' AND user_id='$user_id'");
  
  if(mysqli_num_rows($quer0) != 0){
    $ro0=mysqli_fetch_assoc($quer0);
    $update_qty = ((int)$ro0['quantity']+1);

    if($ro0['quantity'] == $qty){
      $que2 = "UPDATE cart SET quantity = '".$update_qty."' WHERE product_id = '".$proid."' AND user_id='".$user_id."'";
      $query2=mysqli_query($db,$que2);
    }else{
      $que2 = "UPDATE cart SET quantity = '".$qty."' WHERE product_id = '".$proid."' AND user_id='".$user_id."'";
      $query2=mysqli_query($db,$que2);
    }
  }else{
    $query = "INSERT INTO cart (product_id, user_id, name, quantity, price, image) 
          VALUES('$proid', '$user_id', '$name', '$qty', '$price', '$imageurl')";
    $result = mysqli_query($db, $query);
  }
  
  $product_name = $_POST['name'];
  echo json_encode($product_name);
   
}

// cart item delete
if(isset($_POST['removecart_proid'])) {
  $proid = $_POST['removecart_proid'];
 
  $user_id = "";
  if(isset($_SESSION['userid'])){
    $user_id = $_SESSION['userid'];
  }
  else{
    if (!empty($ip)) {
      $user_id = $ip;
    }
  }

  $query = "DELETE FROM cart WHERE product_id='".$proid."' AND user_id='".$user_id."'";
  $result = mysqli_query($db, $query);
   
}


// cart item update
if(isset($_POST['uptocart_proid'])) {
  $proid = $_POST['uptocart_proid'];
  $qty = $_POST['qty'];
 
  $user_id = "";
  if(isset($_SESSION['userid'])){
    $user_id = $_SESSION['userid'];
  }
  else{
    if (!empty($ip)) {
      $user_id = $ip;
    }
  }

  $query = "UPDATE cart SET quantity = '".$qty."' where product_id = '".$proid."' AND user_id='".$user_id."'";
  $result = mysqli_query($db, $query);
   
}

//end new uploaded



// if (isset($_POST['addcart'])) {
//   $proid = mysqli_real_escape_string($db, $_POST['proid']);
//   $name = mysqli_real_escape_string($db, $_POST['name']);
//   $price = mysqli_real_escape_string($db, $_POST['price']);
//   $imageurl = mysqli_real_escape_string($db, $_POST['imageurl']);
//   $qty = mysqli_real_escape_string($db, $_POST['qty']);
 

//   if (!empty($ip)) {
//     $query = "INSERT INTO cart (product_id, user_id, name, quantity, price, image) 
//           VALUES('$proid', '$ip', '$name', '$qty', '$price', '$imageurl')";
//     $result = mysqli_query($db, $query);
//     if($result){
//     $_SESSION['success'] = "Product Added To Cart";
//     header('location:'.$_SERVER['PHP_SELF']);
//     die();
    
//     }
//     else{
//       $_SESSION['error'] = "somthing went wrong";
//       header('location:'.$_SERVER['PHP_SELF']);
//     }
//   }
//   else{
//       $_SESSION['error'] = 'Please Login First To Add Producr In Cart!';
//       header('location:'.'login-register.php');
//       die();
//     }

// }
// if (isset($_POST['addcartc'])) {
//   $proid = mysqli_real_escape_string($db, $_POST['proid']);
//   $name = mysqli_real_escape_string($db, $_POST['name']);
//   $price = mysqli_real_escape_string($db, $_POST['price']);
//   $imageurl = mysqli_real_escape_string($db, $_POST['imageurl']);
//   $qty = mysqli_real_escape_string($db, $_POST['qty']);
//   $catid = mysqli_real_escape_string($db, $_POST['cattid']);
  

//   if (!empty($ip)) {
//     $query = "INSERT INTO cart (product_id, user_id, name, quantity, price, image) 
//           VALUES('$proid', '$ip', '$name', '$qty', '$price', '$imageurl')";
//     $result = mysqli_query($db, $query);
//     if($result){
//     $_SESSION['success'] = "Product Added To Cart";
//     header('location:'.'shop-left-sidebar.php?category_id='.$catid);
//     die();
    
//     }
//     else{
//       $_SESSION['error'] = "Please Login First";
//       header('location:'.'shop-left-sidebar.php?category_id='.$catid);
//     }
//   }
//   else{
//       $_SESSION['error'] = 'Please Login First To Add Producr In Cart!';
//       header('location:'.'login-register.php');
//       die();
//     }
  

// }
// if (isset($_POST['addcartb'])) {
//   $proid = mysqli_real_escape_string($db, $_POST['proid']);
//   $name = mysqli_real_escape_string($db, $_POST['name']);
//   $price = mysqli_real_escape_string($db, $_POST['price']);
//   $imageurl = mysqli_real_escape_string($db, $_POST['imageurl']);
//   $qty = mysqli_real_escape_string($db, $_POST['qty']);
//   $catid = mysqli_real_escape_string($db, $_POST['cattid']);
  

//   if (!empty($ip)) {
//     $query = "INSERT INTO cart (product_id, user_id, name, quantity, price, image) 
//           VALUES('$proid', '$ip', '$name', '$qty', '$price', '$imageurl')";
//     $result = mysqli_query($db, $query);
//     if($result){
//     $_SESSION['success'] = "Product Added To Cart";
//     header('location:'.'brands.php?brand_id='.$catid);
//     die();
    
//     }
//     else{
//       $_SESSION['error'] = 'Please Login First';
//       header('location:'.'ogin-register.php');
//       die();
//     }
//   }
//   else{
//       $_SESSION['error'] = 'Please Login First To Add Producr In Cart!';
//       header('location:'.'login-register.php');
//       die();
//     }
  

// }
//$count ="SELECT COUNT(product_id) FROM cart where user_id = '$user_id'";
// LOGIN USER FROM CHECKOUT
if (isset($_POST['loginuser'])) {
  $email = mysqli_real_escape_string($db, $_POST['Username']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);

  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }




  if (count($errors) == 0) {
  $ch = curl_init($base_url."token");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
   'UserName' => $email,
   'Password' => $password,
   'grant_type' => 'password'
 )));
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

  $result=curl_exec ($ch);
  curl_close ($ch);


  $result = json_decode($result, true);
  $error = $result["error_description"];
  $usernameg = $result["userName"];
  $acid = $result["AccountID"];

  if (!empty($error)) {
    $_SESSION['error'] = $error;
  }
  elseif(!empty($acid)){
      
       $new_data = "Select * from cart where user_id='$ip'";
       $resultN = $db->query($new_data); 
      
       $rows = array();
       while($value = mysqli_fetch_array($resultN))
       $rows[] = $value;
      
       foreach($rows as $value){
       $prodID = $value['product_id'];
       $quantity =  $value['quantity'];
       $price = $value['price'];
           
       $old_data = "Select * from cart where user_id='$acid' and product_id = '$prodID'";
       $resultO = $db->query($old_data);
       $fetch = mysqli_fetch_assoc($resultO);
        
        if(mysqli_num_rows($resultO) != 0){   
       $updateQ = $fetch['quantity'] + $quantity;
       $updateP = $fetch['price'] + $price;
        
       $update_cart = "UPDATE cart SET quantity='$updateQ' WHERE user_id='$acid' and product_id = '$prodID'"; //update guest cart when user login
       $resultcart = $db->query($update_cart);
            
       $del = "delete from cart where user_id='$ip' and product_id = '$prodID'";
       $res = $db->query($del);
        }
       }
       $update_cart = "UPDATE cart SET user_id='$acid' WHERE user_id='$ip'"; //update guest cart when user login
       $resultcart = $db->query($update_cart);  
  
       $_SESSION['userid'] = $acid;
       $_SESSION["token"] = $result["access_token"];
       $_SESSION['userid'] = $acid;
    
       $_SESSION['username'] = $usernameg;
    
    header('location: checkout.php');
  }
      
  }
}


if(isset($_POST['email']))
{

 $email = mysqli_real_escape_string($db, $_POST['email']);
    
     $curl = curl_init();
                    
     curl_setopt_array($curl, array(
     CURLOPT_URL => $base_url."api/OnlineCustomers/GetCustomerByEmail?Email=$email",
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_TIMEOUT => 30,
     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
     CURLOPT_CUSTOMREQUEST => "GET",
     CURLOPT_HTTPHEADER => array( "cache-control: no-cache"),));
                    
     $response = curl_exec($curl);
     $err = curl_error($curl);
                    
     curl_close($curl);
                    
     $response = json_decode($response, true);
                    
    $datasearch = $response["Data"];
    
     if(!empty($datasearch))
     {
        echo 'Y';
     }
    else{
        echo 'N';
    }

}

?>
