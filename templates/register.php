<!doctype html>
<html lang="eng-US">
<head>
<meta charset="utf-8">
<title>UMW Subscription Boxes</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<!--link to jquery librarys -->
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
<script src="../load_content.js"></script>
</head>

<body>

<div id="wrapper">
        <div id="masthead">
<!--            <h1>EagleBox</h1>
        <h3>(Study-Abroad subscripton box service)</h3> -->
        </div> <!-- end masthead -->
        <div id="pageblock">
                <div class="block" style="width: 75%; float:left">
                <div id="content">
			<div id="guts">
	<?php
		//establish database connection
		include('dbinfo.php');
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		if(!$conn){
			echo ("<p> Unable to process your request.\nPlease try again later.</p>");
			exit();
		}

		//begin registration
		if(isset($_POST['submit'])){
			$msg = NULL;
			//checks first name
			if(empty($_POST["first_name"])){
				$fname = FALSE;
				$msg .= '<p>You must enter in a first name.</p>';
			}else{
				$fname = mysqli_real_escape_string($conn, $_POST['first_name']);
			}

                        //checks last name
                        if(empty($_POST["last_name"])){
                                $lname = FALSE;
                                $msg .= '<p>You must enter in a last name.</p>';
                        }else{
                                $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
                        }

			//checks password
			if(empty($_POST['password'])){
				$password = FALSE;
				$msg .= '<p>You must enter in a password.</p>';
			}else{
				if($_POST['password'] == $_POST['password_confirm']){
					$password = mysqli_real_escape_string($conn, $_POST['password']);
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
			if($fname && $lname && $password && $address && $email){
				//where SELECT $query info goes for subscription database
				$query = "SELECT * FROM sub_users WHERE email='$email'";
				$result = @mysqli_query($conn, $query);
				if(mysqli_num_rows($result) == 0){
					//where INSERT $query info gets inserted into subscription database
					$query = "INSERT INTO sub_users (first_name, last_name, email, address, user_password) VALUES('$fname', '$lname', '$email', '$address', '$password')";
					$result = @mysqli_query($conn, $query);
				//when registration info is good
					if($result){
						echo '<p>You have successfully registered.</p>';
					}else{
						$msg .= '<p>We could not register you at this time.</p><p>' . 
						mysqli_error() . '</p>';
					}

				}else{
					$msg .= '<p>That email is already in use.</p>';
				}
				mysqli_close();
			}else{
				$msg .= '<p>Error registering informatiion. Please try again later.</p>';
			}
		}
		//prints any error messages
		if(isset($msg)){
			echo $msg;
		}
	?>
			</div>
                </div> <!--end content-->
                </div> <!-- end block-->
                <div class="block" style="width:25%; float:right">
                <nav id="nav01"></nav>
                </div>
        </div><!-- end pageblock -->
    <footer style="float:left">
    <p style="color:white">&copy; <script language="JavaScript">
        <!--
    today=new Date();
    year0=today.getFullYear();
    document.write(year0);
        //-->
        </script>.  All Rights Reserved.</p>
</footer>
</div> <!-- end wrapper -->
<div id="galleryContainer"></div>
<script src="../javascript/functions.js"></script>
<script src="/javascript/navbar.js"></script>
</body>
</html>
