<?php
include 'conn.php';

$user_id = mysqli_real_escape_string($conn, $user_id);
$content = mysqli_real_escape_string($conn, $content);

$insertion_result = false;
$error_message = "";

$sql =
    "INSERT INTO posts (user_id, content)
VALUES ('$user_id', '$content');";

if ($insertion_result = mysqli_query($conn, $sql)) {
    $error_message = "New record created successfully";
} else {
    $error_message = "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
