<!doctype html>
<html lang="eng-US">
<head>
<meta charset="utf-8">
<title>UMW Subscription Boxes</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--link to jquery librarys -->
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
<script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
<script src="load_content.js"></script>
</head>

<body>

<div id="wrapper">
	<div id="masthead">
<!--		<h1>EagleBox</h1>
        <h3>(Study-Abroad subscripton box service)</h3> -->
	</div> <!-- end masthead -->
	<div id="pageblock">
		<div class="block" style="width: 75%; float:left">
		<div id="content">
			<?php include("templates/home.php");
			?>
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
</body>
<script src="javascript/navbar.js"></script>
</html>
