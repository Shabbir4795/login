<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<style>
		div{
			align-items: center;
			width: 50%;
			//height: 20%;
			text-align: center;
			outline: none;
		}
		input[type = text]{
			width: 100%;
			padding: 12px;
			border-radius: 8px;
			border-color: #4CAF50;
			outline-color: blue;
			//outline: transparent;

		}
		input[type = text]:hover{
			border-color: blue;
			box-shadow: 0 2px #999;
		}
		input[type = text]:active{
			border-color: blue;
			box-shadow: 0 4px #999;
		}
		input[type = password]{
			width: 100%;
			padding: 12px;
			border-radius: 8px;
			border-color: #4CAF50;
			outline-color: blue;

		}
		input[type = password]:hover{
			border-color: blue;
			box-shadow: 0 2px #999;
		}
		input[type = password]:active{
			border-color: blue;
			box-shadow: 0 4px #999;
		}
		input[type = submit]{
			width: 100%;
			padding: 12px;
			border-radius: 8px;
			border-color: #4CAF50;
			background-color: #4CAF50;
			color: #fff;
			//transform: translateY(15px);
			outline: none;
			box-shadow: 0 2px #666;
		}
		input[type = submit]:hover{
			background-color: green;
		}
		input[type = submit]:active{
			background-color: green;
			box-shadow: 0 1px #999;
			transform: translateY(1px);
		}
	</style>
</head>
<body>
<center>
	<div>
		<h3>Please enter your credentials. </h3>
		<form method="POST" action="sign_in_data.php">
			<input type="text" name="user_id" 
			placeholder = "Enter your user_id" required=""><br><br>
			<input type="password" name="password" 
			placeholder="Enter password" required=""><br><br>
			<input type="submit" name="Sign_in" value="Sign in">
		</form>
	</div>
</center>
</body>
</html>