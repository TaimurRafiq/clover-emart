<?php
session_start();

$marchant = "CLOVERPAKIST";
$api_password = "09ba64722bf13230a08603c2791f8d23";
$return_url = "https://clover-emart.com/orderplaced.php";
$currency = "PKR";

$order_id = $_SESSION['payment_order'];
$payer_name = $_SESSION['payment_fname']." ".$_SESSION['payment_lname'];
$amount = $_SESSION['payment_amount'];
$address = $_SESSION['payment_address'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://bankalfalah.gateway.mastercard.com/api/nvp/version/56");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "apiOperation=CREATE_CHECKOUT_SESSION&apiPassword=$api_password&interaction.operation=PURCHASE&interaction.returnUrl=$return_url&apiUsername=merchant.$marchant&merchant=$marchant&order.id=$order_id&order.amount=$amount&order.currency=$currency");
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);

$_SESSION["successIndicator"] = explode("=", explode("&", $result)[5])[1];
$session_id = explode("=", explode("&", $result)[2])[1];
?> 

<!DOCTYPE html>
<html>
    <head>
        <script src="https://bankalfalah.gateway.mastercard.com/checkout/version/56/checkout.js"
                data-error="errorCallback"
                data-cancel="https://clover-emart.com/checkout.php">
        </script>
        
        <script type="text/javascript">
            function errorCallback(error) {
                  console.log(JSON.stringify(error));
                  alert("Error : "+JSON.stringify(error));
                  window.location.href = "https://clover-emart.com/payment_error.php";
            }

            Checkout.configure({
                merchant: '<?php echo $marchant; ?>',
                order: {
                    amount: function() {
                        return <?php echo $amount; ?>;
                    },
                    currency: '<?php echo $currency; ?>',
                    description: 'Ordered goods',
                    id: '<?php echo $order_id; ?>'
                },
                interaction: {
                    merchant: {
                        name: '<?php echo $payer_name; ?>',
                        address: {
                            line1: '<?php echo $address; ?>',
                            line2: ''            
                        }    
                    }
                },
                session: {
                    id: '<?php echo $session_id; ?>'
                }
            });
            Checkout.showPaymentPage();
        </script>
    </head>
    <body>
    </body>
</html> 