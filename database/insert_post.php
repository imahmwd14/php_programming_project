<?php
include 'conn.php';

$user_name = mysqli_real_escape_string($conn, $_SESSION['username']);
$content = mysqli_real_escape_string($conn, $_POST['content']);

$insertion_result = false;
$error_message = "";

$sql =
    "INSERT INTO posts (user_name, content)
VALUES ('$user_name', '$content');";

if (strlen($content) > 0 && $insertion_result = mysqli_query($conn, $sql)) {
    $error_message = "New record created successfully";
} else {
    $error_message = "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
