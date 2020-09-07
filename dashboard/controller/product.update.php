<?php 
include "../../controller/connection.php";
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$size = $_POST['size'];

$exe=$con->query("UPDATE products SET name = '$name', price = '$price', size = '$size'");
if ($exe) {
    echo 1;
}

