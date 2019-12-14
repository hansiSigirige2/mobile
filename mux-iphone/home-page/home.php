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
	<div class="carousel-inner promo-inner">
		<div class="carousel-item promo-item active">
			<div class="card promo-card">
				
				<!-- <div class="card-body">
				<div class="promo-image">	
				<img src="../assets/images/potatoes.png" style=" width: 105px;">
				</div>
				<div class="promo-sale">50% OFF</div>
				<div class="promo-name">potatoes 1kg</div>
				<div class="promo-strike">RS.240</div>
				<div class="promo-price">rs.120</div>
				</div> -->
			</div>
		</div>
		<!-- <div class="carousel-item promo-item ">
			<div class="card promo-card">
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
		<div class="carousel-item promo-item ">
			<div class="card promo-card">
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
		</div> -->
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
<?php 	
$products_json = file_get_contents('../data/products.json');
		$products_arr = json_decode($products_json, true);
		$prod_length=count($products_arr);
		
		echo '<div class ="ui-grid-a">';
		for ($x = 0; $x <$prod_length; $x++) {
			if ($x === 0){
				echo '<div class ="ui-block-a product-padding">';
			}
			else{
				echo '<div class ="ui-block-b product-padding">';
			}
				echo'<div class="card product-card">';
				echo '<img class="card-img-top card-image-border" src='.$products_arr[$x]['image'].'alt="Card image cap">';
				echo '<div class="card-body product-body">';
				echo '	<h5 class="product-title">'.$products_arr[$x]['product_name'].'</h5>';
				echo '	<img class="favorite-icon" src="../assets/images/favorite-empty.png" >';
				echo '<div class="product-price">RS.'.$products_arr[$x]['product_price'].'</div>';
				echo '</div>';
				echo '</div>';
			    echo '</div>';
		}
		echo '</div>';
?>

<!-- global search cards -->


<?php include '../templates/footer.php'; ?>