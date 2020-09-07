<?php
include "connection.php";
$email  = $_POST['email'];
$secret  = $_POST['secret'];

if ($email == "admin@modanice.com" && $secret == "Colombia2020") {
    session_start();
    $_SESSION['admin'] = '1';
    echo "2";
} else {

    $sql = "SELECT * FROM users WHERE email = '$email' AND secret = '$secret'";
    $exe = $con->query($sql);

    // Capturar id
    $sql2 = "SELECT * FROM users WHERE email = '$email' AND secret = '$secret'";
    $exe2 = $con->query($sql);
    $rows = mysqli_num_rows($exe);
    $id = $exe2->fetch_assoc();
    $id = $id['id'];
    if ($rows > 0) {
        session_start();
        $_SESSION['user'] = $id;
        echo "1";
    }
}
