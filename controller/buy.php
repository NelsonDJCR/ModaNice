<?php 
include "connection.php";
$user_id = $_POST['user_id'];
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];

$e = $con->query("INSERT INTO orders (user_id, product_id, product_name, product_price, state) VALUES ('$user_id','$product_id','$product_name','$product_price','1')");
if ($e) {
    echo 1;
}