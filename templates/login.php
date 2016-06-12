<!doctype html>
<?php 
$cookie_name = "username";
$cookie_value = $_POST['username'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<?php
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
?>

<html lang="eng-US">
<?php header( "refresh:1;url=../index.php" );  ?>
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
if(isset($message)) { echo '<font color="red">', $message, '</font>'; }
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
<script src="../javascript/navbar.js"></script>
</body>
</html>
         
