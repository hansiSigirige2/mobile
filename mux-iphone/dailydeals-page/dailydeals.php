<<<<<<< HEAD
<?php 
	session_start();
	include '../templates/header.php';
?>
	

<header>
<link rel="stylesheet" href="dailydeals.css">
</header>

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
	  
=======
<div data-role="page" id="home" class="page-full">

	<?php 
    session_start();
    $_SESSION['page-type']= 'discount';
	?>
	<?php include '../templates/header.php'; ?>
	<header>
	<link rel="stylesheet" href="../dailydeals-page/dailydeals.css">
		<link rel="stylesheet" href="../assets/styles/header.css">
		<!-- <script src="../assets/scripts/main.js"></script> -->
	</header>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

 <!-- Another variation with a button -->
 <div class="input-group">
    <input type="text" class="dailydealsform-control" placeholder="Search">
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>
      </button>
>>>>>>> 02e5957a901f6e49d3ab9125d5da4aa61acca4b7
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

<!-- carousel promo done -->

<p class="dailydeals-heading" style="margin-top:10px;">DAILY DEALS</p>
<?php 
  $products_json = file_get_contents('../data/products.json');
  $products_arr = json_decode($products_json, true);
          if ($_SESSION['orientation'] == "land") {
            echo '<div class ="ui-grid-b">';
          } 
          else {
            echo '<div class ="ui-grid-a">';						
          }		
          
          for ($x = 0; $x <count($products_arr); $x++) {
           
          
              echo '<div class ="ui-block-b product-padding">';
            

              echo '
                <div class="ui-block-a">
                      <div class="card dailydeals-card">
                      <div class="card-body-data" style="width: 170px;">
                      <img  src="'.$products_arr[$x]['image'].'" class="dailydeals-image" style = "height: 131px;">
                      <hr class="divider">
                      <span>
                      <p class="dailydeals-name">'.$products_arr[$x]['product_name'].'</p>
                      </span>
                      <span onclick="changeImage2()"><img class="heart" id="favdeals2" src="heart.svg"></span>
                      <div>
                      <img class="star" id="star" src="../assets/images/Star.png">
                      <img class="star" id="star" src="../assets/images/Star.png">
                      <img class="star" id="star" src="../assets/images/Star.png">
                      <img class="star" id="star" src="../assets/images/Star.png">
                      <img class="star" id="star" src="../assets/images/Star.png">
                      </div>
                      <div class = "productprice">'.$products_arr[$x]['discounted_price'].'</div>
                      <div class = "oldprice"><strike>'.$products_arr[$x]['product_price'].'</strike></div>                   
                      
                    
                      
                      </div>
                      </div>
                      </div>
                  </div>              
                  ';
          }
          echo '</div>';
  ?>

      <button id="dailydeals-viewbutton" style="margin-left:137px;">View More</button>
      
      <script>
    function changeImage()
        {
        var img = document.getElementById("favdeals");
        img.src="heart (selected).png";
        }

        function changeImage1()
        {
        var img = document.getElementById("favdeals1");
        img.src="heart (selected).png";
        }
        function changeImage2()
        {
        var img = document.getElementById("favdeals2");
        img.src="heart (selected).png";
        }
        function changeImage3()
        {
        var img = document.getElementById("favdeals3");
        img.src="heart (selected).png";
        }
</script> 

<div class="footer-padding"></div>

<?php include '../templates/footer.php'; ?>