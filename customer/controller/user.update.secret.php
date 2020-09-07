<?php
include "../../controller/connection.php";
$id = $_POST['id'];
$last = $_POST['last'];
$new = $_POST['new'];
$comfirm = $_POST['comfirm'];

$correct = $con->query("SELECT * FROM users WHERE id = '$id' AND secret = '$last'");

$rows = mysqli_num_rows($correct);

if ($last == "" || $new == "" || $comfirm == "") {
    # Datos vacios
    echo 4;
} else if ($rows == 0) {
    // No es la clave
    echo 2;
} else if ($new != $comfirm) {
    // Las nuevas claves no coinciden
    echo 3;
}else if($con->query("UPDATE users SET secret = '$new' WHERE id = '$id'  ")){
    echo 1;
}

