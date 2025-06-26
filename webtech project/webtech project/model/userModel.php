<?php
require_once("../db.php");

function insertUser($name, $email, $pass) {
    $conn = createCon();
    $sql = "INSERT INTO user (name, email, pasword) VALUES ('$name', '$email', '$pass')";
    return mysqli_query($conn, $sql);
}

function checkLogin($email, $pass) {
    $conn = createCon();
    $sql = "SELECT * FROM user WHERE email='$email' AND pasword='$pass'";
    return mysqli_query($conn, $sql);
}
?>