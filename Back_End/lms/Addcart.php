<?php
include "connection.php";

$artID=$_GET['Is'];
$sql = "UPDATE cart SET quantity=quantity+1 WHERE product_name='$artID'";
$sqll = "UPDATE cart SET Total=product_price*quantity WHERE product_name='$artID'";
mysqli_query($con,$sql);
mysqli_query($con,$sqll);
header("location:cart.php");



?>