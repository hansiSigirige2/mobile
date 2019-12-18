<div data-role="page" id="home" class="page-full" style="background-color: white;">

<?php 
	session_start();
	$_SESSION['page-type']= 'catalog';
	include '../templates/header.php';
?>
	

<header>
<link rel="stylesheet" href="../catalog/catalog.css">
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

<!-- Product Cards -->
<div id="productcat" class="category-header">
    <?php 
    if(isset($_SESSION['categoryname'])){
        $category_name=$_SESSION['categoryname'];
      echo '<div id="productcat" class="category-header">'.$category_name.'</div>';
    }
	?>

	<!-- <button onclick="sortFunction()">Try it</button> -->
  
<div class="ui-grid-solo category-container">
	
		<?php
		
		$products_json = file_get_contents('../data/products.json');
		$prod_arr = json_decode($products_json, true);		
        
            foreach($prod_arr as $var){
                if (strcasecmp($var['category_name'],$category_name)==0){

                    echo '<div class="card cat-card">';
                    echo '<div class="card-body">';
                    echo '<img src="'.$var['image'].'" class="cat-image">';
					echo '<div class="line-sep"><div>';
					echo '<hr class="divider">';			
					echo '<div class="cat-name text-left">' . $var['product_name'] . '</div>';
					echo '<table>';
					echo '<tr>';
					echo '<td style="color:green;text-align:center;">'. $var['discounted_price'] . '</td>';
					echo '<td style="color:red;text-align:center;"><strike>'. $var['product_price'] . '</strike></td>';
					echo '</tr><span>';
					echo '</table>';
					echo '<div id="input_count" >
					<input type="image" src="../assets/images/minus.svg" id="moins" onclick="minus()" >
					<input type="text" size="25" value="1" class="counter" id="count" data-role="none">
					<input type="image" src="../assets/images/add.svg" id="plus" onclick="plus()">
					</div>';	
					echo '<a class="button-login" data-role="none" data-inline="true">Add</a>';
    				/* echo '<div class="cat-name text-left">' . $var['product_price'] .'</div>';
					echo '<div class="cat-name text-right">' . $var['reduce_price'].'</div>'; */
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
					echo '</div>';
					
                }
            }			
			?>

	<div class="ui-grid-solo text-right view-all" onclick="window.location.href='../categories/categories.php';">VIEW ALL</div>
</div>
<!-- carousel categories -->

<div class="footer-padding"></div>

<?php include '../templates/footer.php'; ?>

<script>
	var count = 1;
    var countEl = document.getElementById("count");
    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count > 1) {
        count--;
        countEl.value = count;
      }  
	}

	
</script>	