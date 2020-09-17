<!DOCTYPE html>
<html>
<head>
	<title>Latihan 5e</title>
	<style>
	.container{
		border: 2px dashed lightblue;
		width: 250px;
		height: 400px;
		background-color: black;

	}

	.login{
		
		font-family: ;
		font-size: 19px;
		padding: 17px;
		color: orange;
		text-align: center;

	}

	.img{
		padding-left: 22px;
	}

	</style>
</head>
<body>
<div class = "container">
	<form action = "admin.php" method = "post">
		<h3 style="color: white;" align="center">Login</h3>

	<img src="../assets/images/nyc6.jpg" width="200px;" class="img">

	<div class = "login">
			<label for="username">Username : </label>
			<input type="text" name="username" id="username" autocomplete="off">
			<br>
			<label for="password">Password : </label>
			<input type="text" name="password" id="password" autocomplete="off">
			<br><br>
			<button type="submit" name="login">Login</button>
		</form>
		<p style="color: white; font-size: 15px; padding: 5px; font-style: italic;">admin/admin</p>
	</div>
</div>

</body>
</html>