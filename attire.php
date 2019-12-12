<html lang="en">
<head>
	<?php include_once 'includes/dbh.inc.php' ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Quicksand:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<title>KTJ Shop</title>
</head>
<body>
	<div class="nav-nav-nav"></div>
	<div class="navbar">
		<div class="navbar-img">
			<a href="#home"><img src="img/navbar-logo.gif" alt="" id="navbar-logo"></a>
			<h1 class="navbar-title">KTJ SHOP</h1>
		</div>
		<div class="search-bar">
			<ul id="navbar-ul">
				<li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="#" class="nav-link">home</a></li>
			</ul>
		</div>
	</div>
	<div class="sidenav">
		<div id="sidenav-container">
			<a href="index.php">school supplies</a>
			<a href="attire.php" class="sidenav-link-active">attire</a>
			<a href="sport-supplies.php">sport supplies</a>
		</div>
	</div>
	<div class="content">
		<?php include 'functions/attire-functions.php' ?>
	</div>
<script src="js/main.js" charset="utf-8"></script>
</body>
</html>
