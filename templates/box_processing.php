<!doctype html>
<html lang="eng-US">
<?php header( "refresh:1;url=../index.php#new_account.php" );  ?>
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
			//checks password
			if(empty($_POST['password'])){
				$password = FALSE;
				$msg .= '<p>You must enter in a password.</p>';
			}else{
					$password = mysqli_real_escape_string($conn, $_POST['password']);
			}

			//checks email
			if(empty($_POST['email'])){
				$email = FALSE;
				$msg .= '<p>You must enter in an email address.</p>';
			}else{
				$email = mysqli_real_escape_string($conn, $_POST['email']);
			}
			//checks starting month
			if(empty($_POST['startmonth'])){
				$startmonth = FALSE;
				$msg .= '<p>You must select a starting month.</p>';
			} else {
				$startmonth = mysqli_real_escape_string($conn, $_POST['startmonth']);
			}

			//checks starting year
			if(empty($_POST['startyear'])){
				$startyear = FALSE;
				$msg .= '<p>You must select a starting year.</p>';
			} else {
				$startyear = mysqli_real_escape_string($conn, $_POST['startyear']);
			}

			//checks subscription length
			if(empty($_POST['sub_length'])){
				$sub_length = FALSE;
				$msg .= '<p>You must select a subscription length.</p>';
			} else {
				$sub_length = mysqli_real_escape_string($conn, $_POST['sub_length']);
			}

			//checks subscription box frequency
			if(empty($_POST['box_freq'])){
				$box_freq = FALSE;
				$msg .= '<p>You must select a delivery frequency.</p>';
			} else {
				$box_freq = mysqli_real_escape_string($conn, $_POST['box_freq']);
			}

			//checks subscription box size
			if(empty($_POST['box_size'])){
				$box_size = FALSE;
				$msg .= '<p>You must select a box size.</p>';
			} else {
				$box_size = mysqli_real_escape_string($conn, $_POST['box_size']);
			}

			$fav = $_POST['favorite'];

			//first favorite selected
			if(empty($fav[0])){
				$favorite1 = FALSE;
				$msg .= '<p>Please enter three favorites.</p>';
			} else {
				$favorite1 = mysqli_real_escape_string($conn, $fav[0]);
			}

			//second favorite selected
			if(empty($fav[1])){
				$favorite2 = FALSE;
				$msg .= '<p>Please enter three favorites.</p>';
			} else {
				$favorite2 = mysqli_real_escape_string($conn, $fav[1]);
			}

			//third favorite selected
			if(empty($fav[2])){
				$favorite3 = FALSE;
				$msg .= '<p>Please enter three favorites.</p>';
			} else {
				$favorite3 = mysqli_real_escape_string($conn, $fav[2]);
			}

			//user selected preference
			if(empty($_POST['preferences'])){
				$preferences = FALSE;
				$msg .= '<p>Please enter a preferred item type.</p>';
			} else {
				$preferences = mysqli_real_escape_string($conn, $_POST['preferences']);
			}

			//when username, password, and email are good
			if($password && $email){
				//where SELECT $query info goes for subscription database
				$query = "SELECT user_id FROM sub_users WHERE email='$email' && user_password='$password'";
				$result = @mysqli_query($conn, $query);
				if(mysqli_num_rows($result) == 1){
					$row = mysqli_fetch_row($result);
					$id = $row[0];
					//where INSERT $query info gets inserted into subscription database
					$query = "INSERT INTO user_pref (id, start_month, start_year, sub_length, box_freq, box_size, favorite1, favorite2, favorite3, preferences) VALUES('$id', '$startmonth', '$startyear', '$sub_length', '$box_freq', '$box_size', '$favorite1', '$favorite2', '$favorite3', '$preferences')";
					$result = @mysqli_query($conn, $query);
				//when registration info is good
					if($result){
						echo ('<p>You have successfully registered.</p>');
					}else{
						$msg .= '<p>We could not register you at this time.</p><p>' . 
						mysqli_error() . '</p>';
					}

				}else{
					$msg .= '<p>That email does not match any in our records.</p>';
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
