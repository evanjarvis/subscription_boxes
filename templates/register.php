<!-- register.php -->
<html>
	<head>
		<title></title>
	</head>
	<body>
	<form> 
	<?php
		//establish database connection
		include('dbinfo.php');
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		if(!$conn){
			echo ("<p> Unable to process your request.\n" . 
					"Please try again later.</p>");
			exit();
		}

		//begin registration
		if(isset($_POST['submit'])){
			$msg = NULL;

			//checks username
			if(empty($_POST['username'])){
				$username = FALSE;
				$msg .= '<p>You must enter in a username.</p>';
			}else{
				$username = mysqli_real_escape_string($conn, $_POST['username']);
			}

			//checks password
			if(empty($_POST['password1'])){
				$password = FALSE;
				$msg .= '<p>You must enter in a password.</p>';
			}else{
				if($_POST['password1'] == $_POST['password2']){
					$password = mysqli_real_escape_string($conn, $_POST['password1']);
				}else{
					$password = FALSE;
					$msg .= '<p>The passwords you entered do not match.</p>';
				}
			}

			//checks address
			if(empty($_POST['address'])){
				$address = FALSE;
				$msg .= '<p>You must enter in an address.</p>';
			}else{
				$address = mysqli_real_escape_string($conn, $_POST['address']);
			}

			//checks email
			if(empty($_POST['email'])){
				$email = FALSE;
				$msg .= '<p>You must enter in an email address.</p>';
			}else{
				$email = mysqli_real_escape_string($conn, $_POST['email']);
			}

			//when username, password, and email are good
			if($username && $password && $address && $email){
				//where SELECT $query info goes for subscription database
				$result = @mysqli_query($conn, $query);
				if(mysqli_num_rows($result) == 0){
					//where INSERT $query info gets inserted into subscription database
					$result = @mysqli_query($conn, $query);
				}
				//when registration info is good
				if($result){
					echo '<p>You have successfully registered.</p>';
				}else{
					$msg .= '<p>We could not register you at this time.</p><p>' . 
						mysqli_error() . '</p>';
				}
			}else{
				$msg .= '<p>That username is already taken.</p>';
			}
			mysqli_close();
		}else{
			$msg .= '<p>Please try again later.</p>';
		}
		
		//prints any error messages
		if(isset($msg)){
			echo $msg;
		}
	?>
	</body>
</html>
