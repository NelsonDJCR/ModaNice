<?php 
include "../../controller/connection.php";
$id = $_POST['id'];
$e = $con->query("DELETE FROM messages WHERE id = '$id'");
if ($e) {
    echo 1;
}
