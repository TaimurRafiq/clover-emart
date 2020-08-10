<?php
session_start();

if(!isset($_SESSION['payment_error'])){
    $_SESSION['payment_error'] = "Error : Your payment was not transfered";
    header('location: checkout.php');
}

?>