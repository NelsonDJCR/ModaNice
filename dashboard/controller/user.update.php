<?php
include "../../controller/connection.php";
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$exe=$con->query("UPDATE users SET name = '$name', email = '$email', phone = '$phone', address = '$address' WHERE id = '$id'");
if ($exe) {
    echo 1;
}


