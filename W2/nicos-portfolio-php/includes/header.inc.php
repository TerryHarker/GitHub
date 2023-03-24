<?php
echo '<pre>';
// print_r($_SERVER);
echo '</pre>';

$aktuelle_datei = basename( $_SERVER['PHP_SELF'] );
echo 'aktuelle_datei: '.$aktuelle_datei;
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" vocab="http://schema.org/">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>Portfolio</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/theme.css">
	</head>
	<body>
		<header class="navbar navbar-expand-md navbar-dark bd-navbar">
			<nav class="container flex-wrap flex-md-nowrap" aria-label="Main navigation">
				<a class="navbar-brand p-0 me-2" href="/">NICO's PORTFOLIO<a>
				<ul class="navbar-nav flex-row flex-wrap bd-navbar-nav">
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php if($aktuelle_datei == 'index.php'){ echo 'active'; } ?>" href="index.php">Home</a>
					</li>
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php if($aktuelle_datei == 'about-me.php'){ echo 'active'; } ?>" href="about-me.php">About me</a>
					</li>
					<li class="nav-item col-6 col-md-auto">
						<a class="nav-link p-2 <?php if($aktuelle_datei == 'contact.php'){ echo 'active'; } ?>" href="contact.php">Contact me</a>
					</li>
				</ul>
			</nav>
		</header>