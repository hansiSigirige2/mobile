<div data-role="page" id="home" class="page-full" style="background-color: white;">

<?php 
	session_start();
	include '../templates/header.php';
	$_SESSION['page-type']= 'home';
?>
<header>
<link rel="stylesheet" href="home.css">
</header>
<!-- carousel pics -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" >
    <li data-target="#carouselExampleIndicators" style="border-radius: 50% !important; width: 10px !important;height: 10px !important;" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" style="border-radius: 50% !important; width: 10px !important;height: 10px !important;" data-slide-to="1"></li>
	<li data-target="#carouselExampleIndicators" style="border-radius: 50% !important; width: 10px !important;height: 10px !important;" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" style="border-radius: 50% !important; width: 10px !important;height: 10px !important;" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
	
	  <img onclick="window.location.href='../qr-scan/qr.php';"class="d-block w-100" src="../assets/images/img1.png" alt="First slide">

    </div>
    <div class="carousel-item">
	  <img onclick="window.location.href='../dailydeals-page/dailydeals.php';" class="d-block w-100"  src="../assets/images/img2.png" alt="Second slide">
	
    </div>
    <div class="carousel-item">
      <img onclick="window.location.href='../categories/categories.php';"class="d-block w-100" src="../assets/images/img3.png" alt="Third slide">
	</div>
	<div class="carousel-item">
      <img onclick="window.location.href='../about-us/about-us.php';"class="d-block w-100" src="../assets/images/img4.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- search -->
<form name="search" action="../search-page/searchpage.php" method="post" data-ajax="false" enctype="multipart/form-data">
	<div class="row">
		<div class= "col-12 padding-col">
			<input id="search" type="text" placeholder="Search" name="search" class="search ">
			<button name="submit" type="submit" class="btn-search">
				<img class="search-img"src="../assets/images/search.png">
			</button>	
		</div>		
	</div> 
</form>


<?php
if(isset($_POST['search'])){
	$search_value = $_POST['search'];
}
?>
<!-- search -->
<!-- carousel promo -->

<!-- carousel pics -->
<div id="promoCarousel" class="carousel slide carousel-slide " data-ride="carousel">

  <div class="carousel-inner carousel-inner2">
  <div class="hottest-deals">HOTTEST DEALS</div>
    <div class="carousel-item active">

	<div class="promo-card-container">
		<div class="card promo-card">
			<div class="card-body">
				<div class="row">
					<div class="col-5">
						<img src="../assets/images/potatoes.png" alt="" class="promo-slider-image">
					</div>
					<div class="col-7">
						<?php
							if ($_SESSION['orientation'] == "land") {								
								echo '<div class="promo-sale-land">50% OFF</div>';		
								echo '<div class="promo-name-land">potatoes 1kg</div>';	
							} 
							else {
								echo '<div class="promo-sale">50% OFF</div>';
								echo '<div class="promo-name">potatoes 1kg</div>';		
							}
						?>
						<div class="row">
							<?php
								if ($_SESSION['orientation'] == "land") {
									echo '<div class="col-6 no-padding-right"><div class="promo-strike-land">RS.240</div></div>';		
									echo '<div class="col-6 no-padding-all"><div class="promo-price-land">rs.120</div></div>';
									
								} 
								else {
									echo '<div class="col-6 no-padding-right"><div class="promo-strike">RS.240</div></div>';
									echo '<div class="col-6 no-padding-all"><div class="promo-price">rs.120</div></div>';			
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	  
    </div>
    <div class="carousel-item">
	<div class="promo-card-container">
		<div class="card promo-card">
			<div class="card-body">
				<div class="row">
					<div class="col-5">
						<img src="../assets/images/potatoes.png" alt="" class="promo-slider-image">
					</div>
					<div class="col-7">
						<?php
							if ($_SESSION['orientation'] == "land") {								
								echo '<div class="promo-sale-land">50% OFF</div>';		
								echo '<div class="promo-name-land">potatoes 1kg</div>';	
							} 
							else {
								echo '<div class="promo-sale">50% OFF</div>';
								echo '<div class="promo-name">potatoes 1kg</div>';		
							}
						?>
						<div class="row">
							<?php
								if ($_SESSION['orientation'] == "land") {
									echo '<div class="col-6 no-padding-right"><div class="promo-strike-land">RS.240</div></div>';		
									echo '<div class="col-6 no-padding-all"><div class="promo-price-land">rs.120</div></div>';
									
								} 
								else {
									echo '<div class="col-6 no-padding-right"><div class="promo-strike">RS.240</div></div>';
									echo '<div class="col-6 no-padding-all"><div class="promo-price">rs.120</div></div>';			
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </div>
    <div class="carousel-item">
	<div class="promo-card-container">
		<div class="card promo-card">
			<div class="card-body">
				<div class="row">
					<div class="col-5">
						<img src="../assets/images/potatoes.png" alt="" class="promo-slider-image">
					</div>
					<div class="col-7">
						<?php
							if ($_SESSION['orientation'] == "land") {								
								echo '<div class="promo-sale-land">50% OFF</div>';		
								echo '<div class="promo-name-land">potatoes 1kg</div>';	
							} 
							else {
								echo '<div class="promo-sale">50% OFF</div>';
								echo '<div class="promo-name">potatoes 1kg</div>';		
							}
						?>
						<div class="row">
							<?php
								if ($_SESSION['orientation'] == "land") {
									echo '<div class="col-6 no-padding-right"><div class="promo-strike-land">RS.240</div></div>';		
									echo '<div class="col-6 no-padding-all"><div class="promo-price-land">rs.120</div></div>';
									
								} 
								else {
									echo '<div class="col-6 no-padding-right"><div class="promo-strike">RS.240</div></div>';
									echo '<div class="col-6 no-padding-all"><div class="promo-price">rs.120</div></div>';			
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div> 

  </div>
  <a class="carousel-control-prev" href="#promoCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#promoCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="ui-grid-solo text-right view-all" onclick="window.location.href='../dailydeals-page/dailydeals.php';">VIEW ALL</div>
</div>
<!-- carousel promo done -->

<!-- carousel categories -->
<div class="category-header">CATEGORIES</div>
<div class="ui-grid-solo category-container">
<div class="scrolable">		
		<?php
		
		$categories_json = file_get_contents('../data/categories.json');
		$category_arr = json_decode($categories_json, true);			
			for($x = 0; $x<4; $x++){				
				echo '<div class="card cat-card">';
				echo '<div class="card-body">';
				echo '<img src="'.$category_arr[$x]['image'].'" class="cat-image">';
				echo '<div class="line-sep"><div>';
				echo '<div id="'.$category_arr[$x]['category_name'].'" onclick="getcategory(this)" class="cat-name text-center">' . $category_arr[$x]['category_name'] . '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
			?>
	</div>
	
</div>
<div class="ui-grid-solo text-right view-all" onclick="window.location.href='../categories/categories.php';">VIEW ALL</div>
<!-- carousel categories -->



<?php include '../templates/footer.php'; ?>