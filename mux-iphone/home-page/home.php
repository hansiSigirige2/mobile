<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
<header>
<link rel="stylesheet" href="home.css">
</header>
<!-- carousel pics -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" >
    <li data-target="#carouselExampleIndicators" style="border-radius: 50% !important; width: 10px !important;height: 10px !important;" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" style="border-radius: 50% !important; width: 10px !important;height: 10px !important;" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" style="border-radius: 50% !important; width: 10px !important;height: 10px !important;" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/images/img1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/images/img2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/images/img3.png" alt="Third slide">
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

<!-- carousel promo -->
<div class="promocontainer">
	<div id="carouselpromo" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="card">
				<div class="card-body">
				<div class="promo-image">	
				<img src="../assets/images/potatoes.png" style=" width: 105px;">
				</div>
				<div class="promo-sale">50% OFF</div>
				<div class="promo-name">potatoes 1kg</div>
				<div class="promo-strike">RS.240</div>
				<div class="promo-price">rs.120</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="card">
				<div class="card-body">
				<div class="promo-image">	
				<img src="../assets/images/potatoes.png" style=" width: 105px;">
				</div>
				<div class="promo-sale">50% OFF</div>
				<div class="promo-name">potatoes 1kg</div>
				<div class="promo-strike">RS.240</div>
				<div class="promo-price">rs.120</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<div class="card">
				<div class="card-body">
				<div class="promo-image">	
				<img src="../assets/images/potatoes.png"style=" width: 105px;">
				</div>
				<div class="promo-sale">50% OFF</div>
				<div class="promo-name">potatoes 1kg</div>
				<div class="promo-strike">RS.240</div>
				<div class="promo-price">rs.120</div>
				</div>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselpromo" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselpromo" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>
</div>

<!-- global search cards -->
<div class="search-container">
<div class="ui-grid-a">
	<div class ="ui-block-a">
		<div class="card product-card">
		<img class="card-img-top card-image-border" src="../assets/images/carrot.png" alt="Card image cap">
		<div class="card-body">
			<h5 class="product-title">carrots 100g</h5>
			<img class="favorite-icon" src="../assets/images/favorite-empty.png" >
			<div class="product-price">rs.110</div>
		</div>
		</div>
	</div>
	<div class ="ui-block-b">
		<div class="card product-card">
		<img class="card-img-top card-image-border" src="../assets/images/carrot.png" alt="Card image cap">
		<div class="card-body">
			<h5 class="product-title">carrots 100g</h5>
			<img class="favorite-icon" src="../assets/images/favorite-empty.png" >
			<div class="product-price">rs.110</div>
		</div>
		</div>
	</div>
</div>
</div>
<!-- global search cards -->


<?php include '../templates/footer.php'; ?>