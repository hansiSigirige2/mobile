<div data-role="page" id="home" class="page-full">

	<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
	<header>
	<link rel="stylesheet" href="../categories/categories.css">
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

<p class="categories-heading" style="margin-top:40px" >HOTTEST DEALS</p>

<div class="container" style= "height:120px; margin-top:10px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style= "border-radius:20px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="la.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="ui-grid-b category-section">
      <div class="categories-viewall">VIEW ALL</div>
      </div>

<p class="categories-heading" style="margin-top:10px;">CATEGORIES</p>

  <div class="ui-grid-b category-section">
    <div class="ui-block-a">
      <div class="card category-card">
      <div class="card-body">
      <img src="../assets/images/potatoes.png" class="category-image">
      <hr class="divider">
      <p class="categories-name">VEGETABLES</p>
      </div>
      </div>
      </div>
    <div class="ui-block-b"><div class="card category-card"><div class="card-body">
      <img src="../assets/images/dairy2.jpg" class="category-image">
      <hr class="divider">
      <p class="categories-name">Dairy</p>

      </div></div></div>
    <div class="ui-block-c"><div class="card category-card"><div class="card-body">
      <img src="../assets/images/meat.jpg" class="category-image">
      <hr class="divider">
      <p class="categories-name">Meat</p>
      </div></div></div>

      <div class="ui-block-a">
      <div class="card category-card">
      <div class="card-body">
      <img src="../assets/images/potatoes.png" class="category-image">
      <hr class="divider">
      <p class="categories-name">FRUITS</p>
      </div>
      </div>
      </div>

      <div class="ui-block-b">
      <div class="card category-card">
      <div class="card-body">
      <img src="../assets/images/potatoes.png" class="category-image">
      <hr class="divider">
      <p class="categories-name">BEVERAGES</p>
      </div>
      </div>
      </div>

      <div class="ui-block-c">
      <div class="card category-card">
      <div class="card-body">
      <img src="../assets/images/potatoes.png" class="category-image">
      <hr class="divider">
      <p class="categories-name">SEAFOOD</p>
      </div>
      </div>
      </div>

      <div class="ui-block-a">
      <div class="card category-card">
      <div class="card-body">
      <img src="../assets/images/potatoes.png" class="category-image">
      <hr class="divider">
      <p class="categories-name">FROZEN FOODS</p>
      </div>
      </div>
      </div>

      <div class="ui-block-b">
      <div class="card category-card">
      <div class="card-body">
      <img src="../assets/images/potatoes.png" class="category-image">
      <hr class="divider">
      <p class="categories-name">GRAINS</p>
      </div>
      </div>
      </div>

      <div class="ui-block-c">
      <div class="card category-card">
      <div class="card-body">
      <img src="../assets/images/potatoes.png" class="category-image">
      <hr class="divider">
      <p class="categories-name">HEALTH AND BEAUTY</p>
      </div>
      </div>
      </div>

      <div class="ui-block-a">
      <div class="card category-card">
      <div class="card-body">
      <img src="../assets/images/potatoes.png" class="category-image">
      <hr class="divider">
      <p class="categories-name">PAPER PRODUCTS</p>
      </div>
      </div>
      </div>

      <div class="ui-block-b">
      <div class="card category-card">
      <div class="card-body">
      <img src="../assets/images/potatoes.png" class="category-image">
      <hr class="divider">
      <p class="categories-name">PET CARE</p>
      </div>
      </div>
      </div>

      <div class="ui-block-c">
      <div class="card category-card">
      <div class="card-body">
      <img src="../assets/images/potatoes.png" class="category-image">
      <hr class="divider">
      <p class="categories-name">SNACKS</p>
      </div>
      </div>
      </div>



      <div class="ui-block-a">
      
      </div>

      <div class="ui-block-b">
      <button class="categories-viewbutton">View More</button>
      </div>

      <div class="ui-block-c">
      
      </div>

  
</div><!-- /grid-b -->

</body>
</html>


</body>