<?php 
include "../../controller/connection.php";
$id = $_POST['id'];
$exe=$con->query("DELETE FROM orders WHERE id = '$id'");
if ($exe) {
    echo 1;
}

