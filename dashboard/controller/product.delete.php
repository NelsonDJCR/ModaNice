<?php 
include "../../controller/connection.php";
$id = $_POST['id'];
$exe=$con->query("DELETE FROM products WHERE id = '$id'");
if ($exe) {
    echo 1;
}

