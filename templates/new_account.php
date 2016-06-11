<div id="guts">

<form id="register" action="templates/register.php" method="POST">
	<h3>Create an account:</h3>
	First name:<br>
	<input type="text" id="first_name" name="first_name" required/><br>
	Last name:<br>
	<input type="text" id="last_name" name="last_name" required/><br>
	Email:<br>
	<input type="text" id="email" name="email" required><br>
	Shipping address for boxes:<br>
	<input type="text" id="address" name="address" required><br>
	Create password:<br>
	<input type="password" id="password" name="password" required/>
	Confirm password:
	<input type="password" id="password_confirm" name="password_confirm" required/><br><br>

	<input type="submit" name="submit" value="create account"required/>
</form>

</div>
