<?php 
include "../../controller/connection.php";
$id = $_POST['id'];
$state = $_POST['state'];
$e=$con->query("UPDATE orders SET state = '$state' WHERE id = '$id'");
if ($e) {
    echo 1;
}