<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');

$delete_id = $_GET['delete_id'];

if (!empty($delete_id)) {
	$sql = "DELETE FROM cart WHERE product_id=$delete_id";

	if(mysqli_query($db, $sql)){
    $_SESSION['deletecart'] =  "Product were deleted successfully.";
    header('location: cart.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}
?>