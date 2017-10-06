<?php
include_once 'db_connect.php';

$first = mysqli_real_escape_string($conn, $_POST['first_name']);
$last = mysqli_real_escape_string($conn, $_POST['last_name']);
$email = mysqli_real_escape_string($conn, $_POST['email_id']);
$contact = mysqli_real_escape_string($conn, $_POST['phone_number']);
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//echo $password;
$sql = "INSERT INTO users(`first_name`, `last_name`, `email_id`, `contact`, `user_id`, `password`) VALUES ('$first', '$last', '$email', '$contact', '$user_id', '$password');";
mysqli_query($conn, $sql);
/*echo "Account created";

$sql1 = "select * from users;";
$result = mysqli_query($conn, $sql1);
//echo mysqli_num_rows($result);*/
header("Location: index.php?Account created");