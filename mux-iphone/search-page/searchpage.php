<?php 
		session_start();
	?>
	<?php include '../templates/header.php';?>
	

<header>
<link rel="stylesheet" href="searchpage.css">
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
<form action="searchpage.php" method="post" data-ajax="false" class="form-margin">
<div class="row">
	<div class="searchbox">
		<div class= "col-10">
			<input id="search" type="text" placeholder="Search" name="search" class="search ">
	</div>
	<div class="col-2">
		<button type="submit" class="btn-search">
				<img src="https://img.icons8.com/cotton/24/000000/search--v2.png">
			</button>
	</div>
	</div>
</div> 
</form>

<!-- search -->

<!-- global search cards -->
<div class="search-container">
<?php 	
		$products_json = file_get_contents('../data/products.json');
		$products_arr = json_decode($products_json, true);
		$searchresult_arr =array();
		
		if(isset($_POST['search'])){			
			$search_value = $_POST['search'];
		
			for ($x = 0; $x <count($products_arr); $x++){
				if (strcasecmp($products_arr[$x]['product_name'],$search_value)==0){
					array_push($searchresult_arr,$products_arr[$x]);
				}else{
				
				}
			}
			if(count($searchresult_arr) === 0 ){
				echo '<div class ="ui-grid-a">Sorry no results found</div>';

			}else{
				if ($_SESSION['orientation'] == "land") {
					echo '<div class ="ui-grid-b">';
				} 
				else {
					echo '<div class ="ui-grid-a">';						
				}		
				
				for ($x = 0; $x <count($searchresult_arr); $x++) {
					if ($x === 0){
						echo '<div class ="ui-block-a product-padding">';
					}
					else{
						echo '<div class ="ui-block-b product-padding">';
					}
						echo'<div class="card product-card">';
						echo '<img class="card-img-top card-image-border" src="'.$searchresult_arr[$x]['image'].'" alt="Card image cap">';
						echo '<div class="card-body product-body">';
						echo '	<h5 class="product-title">'.$searchresult_arr[$x]['product_name'].'</h5>';
						echo '	<img class="favorite-icon" src="../assets/images/favorite-empty.png" >';
						echo '<div class="product-price">RS.'.$searchresult_arr[$x]['product_price'].'</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
				}
				echo '</div>';
			}
			
		}else{
			echo '<script>window.location.replace("../home-page/home.php");</script>';
		}
		
		
?>

<!-- global search cards -->


<div class="footer-padding"></div>

<?php include '../templates/footer.php'; ?>