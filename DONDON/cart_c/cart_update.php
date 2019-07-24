<?php
session_start();
$psn = $_REQUEST["psn"];

if( isset($_REQUEST["btnUpdate"]) == true){
	$_SESSION["products"][$psn]["quantity"] = $_REQUEST["quantity"];	
}else{
	unset( $_SESSION["products"][$psn] );
}
header("location:cart_show.php");
?>