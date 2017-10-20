
<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<style type="text/css">
form{
	position: absolute;
	height: 100px;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -220px;
}
</style>
</head>
<body>
<form method="post" action="<?php echo base_url().'index.php/MyController/createakun'?>">
		<h3>User info</h3> 
	<div>
		<label>Username</label><br>
		<input type="text" name="username" required=""></input> 
	</div>
	<div>
		<label>Name</label><br>
		<input type="text" name="name"></input>
	</div>
	<div>
		<label>Email</label><br>
		<input type="text" name="email"></input>
		<br>
		<label style="float: rights">Phone</label><br>
		<input type="text"	name="phone"> </input>
	</div>
	<div>
		<label>Password</label><br>
		<input type="password" name="password"></input>
	</div>
	<div>
		<label>Address</label><br>
		<input type="text" name="address"></input>
	</div>
	<br>
	<div >
		<button type="submit">Sign Up</button>
	</div>

</form>
</body>