<?php 
		session_start();
	?>
	<?php include '../templates/header.php';?>
	

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
<!-- search -->
<form name="search" action="../search-page/searchpage.php" method="post" data-ajax="false" enctype="multipart/form-data">

<div class="row">
	<div class="searchbox">
		<div class= "col-10">
			<input id="search" type="text" placeholder="Search" name="search" class="search ">
	</div>
	<div class="col-2">
		<button name="submit" type="submit" class="btn-search">
				<img src="https://img.icons8.com/cotton/24/000000/search--v2.png">
			</button>
	</div>
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


<?php include '../templates/footer.php'; ?>