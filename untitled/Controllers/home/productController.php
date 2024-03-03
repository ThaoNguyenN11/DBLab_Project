<?php
session_start();
include_once("../../Models/product.php");

$product = getAllProduct();
$productShirt = getAllShirt();
$_SESSION['productAll'] = $product;
$_SESSION['productAllShirt'] = $productShirt;
var_dump($productShirt[0]['price']);