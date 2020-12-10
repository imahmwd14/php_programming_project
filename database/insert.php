<?php
include 'conn.php';

$username_db = mysqli_real_escape_string($conn, $username_db);
$name = mysqli_real_escape_string($conn, $name);
$pass = mysqli_real_escape_string($conn, $pass);
$email = mysqli_real_escape_string($conn, $email);

$insertion_reult = false;
$error_message = "";

$sql =
    "INSERT INTO users (username, name, pass, email)
VALUES ('$username_db', '$name', '$pass', '$email');";

if (!($insertion_reult = mysqli_query($conn, $sql))) {
    $error_message =  mysqli_error($conn);
}

mysqli_close($conn);
