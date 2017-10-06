<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
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
		input[type = email]{
			width: 100%;
			padding: 12px;
			border-radius: 8px;
			border-color: #4CAF50;
			outline-color: blue;
		}
		input[type = email]:hover{
			border-color: blue;
			box-shadow: 0 2px #999;
		}
		input[type = email]:active{
			border-color: blue;
			box-shadow: 0 4px #999;
		}
		input[type = tel]{
			width: 100%;
			padding: 12px;
			border-radius: 8px;
			border-color: #4CAF50;
			outline-color: blue;

		}
		input[type = tel]:hover{
			border-color: blue;
			box-shadow: 0 2px #999;
		}
		input[type = tel]:active{
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
<br><br>

<center>
	<div>
		<h1>Welcome</h1>
		<h3>Please fill the below details to create an account</h3>

		<form method="POST" action="sign_up_data.php">
			<input type="text" name="first_name" 
			placeholder="Enter your First Name" required><br><br>
			<input type="text" name="last_name" 
			placeholder="Enter your Last Name" required><br><br>
			<input type="email" name="email_id" 
			placeholder="Enter your email id" required><br><br>
			<input type="tel" name="phone_number" 
			placeholder="Enter your Contact" required><br><br>
			<input type="text" name="user_id" 
			placeholder="Enter the user name" required><br><br>
			<input type="password" name="password" 
			placeholder="Enter Password" required><br><br>
			<input type="submit" name="Sign_up" 
			value="Sign up" onclick="button()">
		</form>
	</div>
</center>
<script>
	function button(){
		window.alert("Account Created.");
	}
</script>
</body>
</html>