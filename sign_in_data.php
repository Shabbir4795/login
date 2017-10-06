<?php
include_once 'db_connect.php';

$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "select * from users;";
$result = mysqli_query($conn, $sql);
$result_check = mysqli_num_rows($result);
//echo $result_check;
$success = 0;
if($result_check > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		if ($user_id == $row['user_id']) {
			$success = 1;
			$login = password_verify($password, $row['password']);
			if ($login == 1) {
				header("Location: index.php?Login=success");
			}
			else
				//echo "Login failure";
				header("Location: sign_in.php?Login=failure");
		}
	}
}
if ($success == 0) {
	//echo "Login failure";
	header("Location: sign_in.php?no such user id");
}