<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
	<style>
		.button{
			padding: 25px 25px;
			font-size: 30px;
			background-color: #4CAF50;
			border: transparent;
			text-align: center;
			border-radius: 15px;
			box-sizing: 20px;
			text-decoration-color: white;
			box-shadow: 0 10px #999;
			color: white;
			cursor: pointer;
			outline: none;
		}
		.button:hover {
			background-color: green;
		}
		.button:active {
			background-color: green;
			box-shadow: 0 7px #666;
			transform: translateY(10px);
		}
	</style>
</head>
<body>
	<center>
		<a href = "sign_up.php"><button class="button">Sign up</button></a>
		<a href="sign_in.php"><button class="button">Sign in</button></a>
	</center>
</body>
</html>