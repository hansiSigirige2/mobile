<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>ZuperMart</title>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
			  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,900|Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.3.1/themes/algolia-min.css"
			  integrity="sha256-HB49n/BZjuqiCtQQf49OdZn63XuKFaxcIHWf0HNKte8=" crossorigin="anonymous">

		<link rel="stylesheet" href="../assets/styles/header.css">
		<script src="https://js.stripe.com/v3/"></script>
		


	</head>

	<body>
		<!-- header -->
	<div class ="ui-grid-b header-iphone">
		<div class ="ui-block-a">
		<img src="../assets/images/ham-menu.png" class ="ham-iphone" onclick="navMenu()">
		</div>
		<div class ="ui-block-b text-center">
		<img onclick="window.location.href='../home-page/home.php';"src="../assets/images/logo.png" class ="logo-iphone">
		</div>
		<div class ="ui-block-c text-right">
		<img onclick="window.location.href='../account-details/details.php';"src="../assets/images/avatar.png" class ="avatar-iphone">
		<img onclick="window.location.href='../Cart/cart.php';"src="../assets/images/cart.png" class ="cart-iphone">
		</div>
	</div>
	<!-- hamburger -->
	<div id="menucon" class="menu-container">
			<div onclick="window.location.href='../home-page/home.php';" class="ui-grid-solo menu-item text-center">
			Home
			</div>
			<div onclick="window.location.href='../categories/categories.php';"class="ui-grid-solo menu-item text-center">Categories</div>
			<div class="ui-grid-solo menu-item text-center">Favorites</div>
			<div onclick="window.location.href='../dailydeals-page/dailydeals.php';"class="ui-grid-solo menu-item text-center">Promotions</div>
			<div onclick="window.location.href='../account-details/details.php';"class="ui-grid-solo menu-item text-center">My Account</div>
			<div onclick="window.location.href='../Cart/cart.php';"class="ui-grid-solo menu-item text-center">Cart</div>
			<div onclick="window.location.href='../about-us/about-us.php';"class="ui-grid-solo menu-item text-center">About us</div>
			<div onclick="window.location.href='../contactus-page/contactus.php';"class="ui-grid-solo menu-item text-center">Contact Us</div>
			<div class="ui-grid-solo menu-item text-center">Previously ordered</div>
			<div class="ui-grid-solo menu-item text-center">FAQ's</div>		
 
    </div>  

	<?php $loggedinuser = "1" ?>


