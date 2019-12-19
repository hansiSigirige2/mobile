<div data-role="page" id="category" class="page-full" style="background-color: white;">

<?php 
	session_start();
	$_SESSION['page-type']= 'category';
	include '../templates/header.php';
?>
	

<header>
<link rel="stylesheet" href="categories.css">
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

<!-- carousel promo done -->

<p class="categories-heading" style="margin-top:10px;">CATEGORIES</p>

<form>	
					<!-- Sorting Widget -->
					<select placeholder="Sort" align="right" data-role="none" name="sort" id="" onchange="this.form.submit()" data-native-menu="true">
                        <option value="Sort" disabled selected>Sort</option>	
                        <option value="asc"> Sort Ascending </option>
                        <option value="dsc"> Sort Descending </option>	
					</select>
					<input data-role="none" style="visibility:hidden" type="submit" value="Submit">
				</form>

  <div class="ui-grid-b category-section">
  <?php 

    function sortByAsc($a, $b) {
        return strcmp($a["category_name"], $b["category_name"]);
    }

    function sortByDsc($b, $a) {
        return strcmp($a["category_name"], $b["category_name"]);
    }

    // function replaceString($old,$new,$string){
    //     return str_replace($old,$new,$string);
    // }

                              

 	 $categories_json = file_get_contents('../data/categories.json');
	  $prod_arr = json_decode($categories_json, true);
      $sortType = isset($_GET['sort']) ? $_GET["sort"] : "";

      switch($sortType){
          case ("asc"):  {
              usort($prod_arr, 'sortByAsc');
              break;
          }

       
          case ("dsc"):  {
              usort($prod_arr, 'sortByDsc');
              break;
          }   
      }
	  for ($x = 0; $x <count($prod_arr); $x++) {
		if($x == 0){
			echo '<div class="ui-block-a">
			<form name="catalog" action="../catalog/catalog.php" method="post" data-ajax="false" enctype="multipart/form-data">
			  <div class="card category-card">
			  <div class="card-body">
			  <img src="'.$prod_arr[$x]['image'].'" class="category-image">
			  <hr class="divider">
			  <p id="'.$prod_arr[$x]['category_name'].'" onclick="getcategory(this)" class="categories-name">'.$prod_arr[$x]['category_name'].'</p>
			  </div>
			  </div>
			  </form>
			  
			  </div>';
		}else{
			echo '<div class="ui-block-b">
			<form name="catalog" action="../catalog/catalog.php" method="post" data-ajax="false" enctype="multipart/form-data">
			  <div class="card category-card">
			  <div class="card-body">
			  <img src="'.$prod_arr[$x]['image'].'" class="category-image">
			  <hr class="divider">
			  <p id="'.$prod_arr[$x]['category_name'].'" onclick="getcategory(this)" class="categories-name">'.$prod_arr[$x]['category_name'].'</p>
			  </div>
			  </div>
			  </form>
			  
			  </div>';
		}
			
	  }

  ?>

      
</div>

      <div class="ui-block-b">
      <button id="categories-viewbutton">View More</button>
      </div>

      <div class="ui-block-c">
      
      </div>

  
</div><!-- /grid-b -->







<?php include '../templates/footer.php'; ?>