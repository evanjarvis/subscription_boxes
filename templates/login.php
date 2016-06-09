
<?php
echo ('hi');
session_start();
echo ('Login with ' . $_POST['username']);
if(isset($_POST['submit'])) {
	include ('dbinfo.php');
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(!$conn){
		echo("<p>Registration error</p>");
		exit();
	}
	
	$message = NULL;
	
	$u = mysqli_real_escape_string($conn, $_POST['username']);
	$p = mysqli_real_escape_string($conn, $_POST['password']);

	if($u && $p) {
		$query="SELECT user_id FROM users WHERE user_name='$u' AND user_password='$p'";
	$result = @mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result, MYSQL_NUM);
	if($row) {
		print "You have successfully logged in \n";
		exit();
	} else {
		$message = '<p>The username and password entered do not match those on file.</p>';
	}
	
	mysqli_close();
	}
	else {
		$message .= '<p>Please try again.</p>';
	}
}

if(isset($message)) { echo '<font color="red">', $message, '</font>'; }

$_SESSION['username']="Altarian";
?>
