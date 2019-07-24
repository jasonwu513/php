<?php
ob_start();
session_start();
$psn = $_REQUEST["psn"];
$_SESSION["products"][$psn]["pname"]=$_REQUEST["pname"];
$_SESSION["products"][$psn]["price"]=$_REQUEST["price"];
$_SESSION["products"][$psn]["quantity"]=1;
header("location:cart_show.php");
?>