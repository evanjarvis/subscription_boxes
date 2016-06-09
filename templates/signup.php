<div id="guts">

<?php
session_start();
if (isset($_SESSION["username"]) && !empty(!$session["username"])){
	echo('
		USER DASHBOARD
		<form id="options" action="logout()">
		<input type="submit" value=logout">
		</form>
		');
} else {
	echo('
		<h3>DISPLAY IF NO SESSION:</h3>
		<form id="login" method="POST">
		<input type="text" placeholder="Username" required><br>
		<input type="password" placeholder="Password" style="margin-top:5px" required><br>
		<input type="submit" value="Login" style="margin-top:5px">
		</form>
		<p>New user? <a href="new_account.php">Create an Account</a></p>
		');
}
/*
function logout(){
	if(isset($_SESSION['username'])){
		unset($_SESSION['username']);
	}
*/
?>
</div>
