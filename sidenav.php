	<?php
	//session_start(); 
	//$_SESSION["username"] = 'Altarian';
	//session_unset();
 ?>
	
	<ul id="sidenav">
	<li><a href="home.php">Home</a></li>
	<li><a href="signup.php">Sign Up</a></li>
	<li><a href="contact.php">Contact Us</a></li>
        <?php if (isset($_SESSION["username"]) && !empty(!$session["username"])){
        echo('<li><a href="signup.php" onclick="logout()">Logout</a></li>');
        } else {
        echo('<li><a href="signup.php">Login</a></li>');
	}
        ?>

	</ul>

