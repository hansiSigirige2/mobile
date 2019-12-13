<div data-role="page" id="home" class="page-full">

	<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
	<?php include '../templates/footer.php'; ?>
	<header>
	<link rel="stylesheet" href="../home-page/home.css">
		<link rel="stylesheet" href="../assets/styles/header.css">
		<script src="../assets/scripts/main.js"></script>
	</header>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<div class="carousel-container">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
		<img src="../assets/images/slideshow1.jpg" alt="SlideShow1" style="width:100%;height: 190px;">
      </div>

      <div class="item">
        <img src="../assets/images/slideshow2.jpg" alt="SlideShow2" style="width:100%;height: 190px;">
      </div>
    
      <div class="item">
        <img src="../assets/images/slideshow1.jpg" alt="SlideShow3" style="width:100%;height: 190px;">
      </div>
    </div>
    
  </div>
</div>

<!-- search bar -->
<div class="searchbox">
		<input id="search" type="text" placeholder="Search..." name="search" class="search">
		<div class="line">|</div>
	<button  class="btn-search">
			<img src="../assets/images/search.png" class="imgsearch">
		</button>
</div>

<!-- promo -->

<div class="container promo-container">
    <div class="row align-items-center v-center-height">
      <div class="msg-box">
        <div class="caption">HOTTEST DEALS</div>
		<div class="card promo-card">
			<div class="card-body">
			<img src="../assets/images/potatoes.png" class="promo-image">
			<div class="promo-sale">50% OFF</div>
			<div class="promo-name">potatoes 1kg</div>
			<div class="promo-strike">RS.240</div>
			<div class="promo-price">rs.120</div>
			</div>
		</div>
      </div>

	</div>
	<div class="view-all-promo">VIEW ALL</div>


	<div class="container cat-container">
		<div class="category-header">CATEGORIES</div>
		
		<?php
		
		$categories_json = file_get_contents('../data/categories.json');
		$category_arr = json_decode($categories_json, true);	
			
		
			foreach ($category_arr as $var) {
				if ($var['category_name']==="Vegetables") {
				echo '<div class="ui-grid-a">';
				echo '<div class="ui-block-a card cat-card">';
				echo '<div class="card-body">';
				echo '<img src="../assets/images/potatoes.png" class="cat-image">';
				echo '<div class="line-sep"><div>';
				echo '<div class="cat-name">' . $var['category_name'] . '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
			if ($var['category_name']==="Meat") {
				echo '<div class="ui-grid-a">';
				echo '<div class="ui-block-b card cat-card">';
				echo '<div class="card-body">';
				echo '<img src="../assets/images/meat.jpg" class="cat-image">';
				echo '<div class="line-sep"><div>';
				echo '<div class="cat-name">' . $var['category_name'] . '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			
			}

		
			if ($var['category_name']==="Dairy") {
				echo '<div class="ui-grid-b">';
				echo '<div class="ui-block-a card cat-card">';
				echo '<div class="card-body">';
				echo '<img src="../assets/images/dairy2.jpg" class="cat-image">';
				echo '<div class="line-sep"><div>';
				echo '<div class="cat-name">' . $var['category_name'] . '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
			if ($var['category_name']==="Grains") {
				echo '<div class="ui-grid-b">';
				echo '<div class="ui-block-b card cat-card">';
				echo '<div class="card-body">';
				echo '<img src="../assets/images/grains.jpg" class="cat-image">';
				echo '<div class="line-sep"><div>';
				echo '<div class="cat-name">' . $var['category_name'] . '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
		}
		?>
		
		</div>	
	</div>
	<div class="view-all-cat">VIEW ALL</div>

	
<!-- promo -->
<!-- categories -->

<!-- cate -->


</html>


