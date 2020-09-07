<?php
include 'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$secret = $_POST['secret'];
$exe = $con->query("INSERT INTO users (name, email, phone, address, secret) VALUES ('$name','$email','$phone','$address','$secret')");
if ($exe) {
    echo 1;
}
