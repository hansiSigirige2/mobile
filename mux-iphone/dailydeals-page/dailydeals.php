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
    </div>
  </div>
  

<p class="dailydeals-heading" style="margin-top:40px" >HOTTEST DEALS</p>

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

<div class="ui-grid-a category-section">
      <div class="dailydeals-viewall">VIEW ALL</div>
      </div>

<p class="dailydeals-heading" style="margin-top:10px;">DAILY DEALS</p>

  <div class="ui-grid-a category-section">
    <div class="ui-block-a">
      <div class="card dailydeals-card">
      <div class="card-body">
     <img src="../assets/images/ambewela.jpg" class="dailydeals-image" style = 'height: 131px;'>
      <hr class="divider">
      <p class="dailydeals-name">DILMAH 500G</p>
      <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
      <span class = "productprice">Rs 500</span>
      <span class = "oldprice"><strike> Rs 750</strike></span>
      
      <span onclick="changeImage()"><img class="heart" id="favdeals" src="heart.svg"></span>
    
      <fieldset class="ui-grid-b">
                                                <div class="ui-block-a">
                                                    <span onclick="openNav()"><img id="dealsminus" src="plus.svg"></span>
                                                </div>
                                                <div class="ui-block-b">
                                                    <input type="number" name="dealsquantity" id="dealsquantity" value="1" style = "align:center;" />
                                                </div>
                                                <div class="ui-block-c">
                                                <span onclick="openNav()"><img id="dealsplus" src="minus.svg"></span>
                                                </div>
                                                <button class="dailydeals-addbutton" style="">ADD</button>
                                            </fieldset>
      
      </div>
      </div>
      </div>
    <div class="ui-block-b"><div class="card dailydeals-card"><div class="card-body">
    <img src="../assets/images/ambewela.jpg" class="dailydeals-image" style = 'height: 131px;'>
      <hr class="divider">
      <p class="dailydeals-name">Dairy</p>
      <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
      <span class = "productprice">Rs 500</span>
      <span class = "oldprice"><strike> Rs 750</strike></span>
      
      <span onclick="changeImage1()"><img class="heart" id="favdeals1" src="heart.svg"></span>
    
      <fieldset class="ui-grid-b">
                                                <div class="ui-block-a">
                                                    <span onclick="openNav()"><img id="dealsminus" src="plus.svg"></span>
                                                </div>
                                                <div class="ui-block-b">
                                                    <input type="number" name="dealsquantity" id="dealsquantity" value="1" style = "align:center;" />
                                                </div>
                                                <div class="ui-block-c">
                                                <span onclick="openNav()"><img id="dealsplus" src="minus.svg"></span>
                                                </div>
                                                <button class="dailydeals-addbutton" style="">ADD</button>
                                            </fieldset>
      

      </div>
    </div>
</div>
    

      <div class="ui-block-a">
      <div class="card dailydeals-card">
      <div class="card-body">
      <img src="../assets/images/ambewela.jpg" class="dailydeals-image" style = 'height: 131px;'>
      <hr class="divider">
      <p class="dailydeals-name">FRUITS</p>
      <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
      <span class = "productprice">Rs 500</span>
      <span class = "oldprice"><strike> Rs 750</strike></span>
      
      <span onclick="changeImage2()"><img class="heart" id="favdeals2" src="heart.svg"></span>
    
      <fieldset class="ui-grid-b">
                                                <div class="ui-block-a">
                                                    <span onclick="openNav()"><img id="dealsminus" src="plus.svg"></span>
                                                </div>
                                                <div class="ui-block-b">
                                                    <input type="number" name="dealsquantity" id="dealsquantity" value="1" style = "align:center;" />
                                                </div>
                                                <div class="ui-block-c">
                                                <span onclick="openNav()"><img id="dealsplus" src="minus.svg"></span>
                                                </div>
                                                <button class="dailydeals-addbutton" style="">ADD</button>
                                            </fieldset>
      
      </div>
      </div>
      </div>

      <div class="ui-block-b">
      <div class="card dailydeals-card">
      <div class="card-body">
      <img src="../assets/images/ambewela.jpg" class="dailydeals-image" style = 'height: 131px;'>
      <hr class="divider">
      <p class="dailydeals-name">BEVERAGES</p>
      <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
      <span class = "productprice">Rs 500</span>
      <span class = "oldprice"><strike> Rs 750</strike></span>
      
          <span onclick="changeImage3()"><img class="heart" id="favdeals3" src="heart.svg"></span>
    
      <fieldset class="ui-grid-b">
                                                <div class="ui-block-a">
                                                    <span onclick="openNav()"><img id="dealsminus" src="plus.svg"></span>
                                                </div>
                                                <div class="ui-block-b">
                                                    <input type="number" name="dealsquantity" id="dealsquantity" value="1" style = "align:center;" />
                                                </div>
                                                <div class="ui-block-c">
                                                <span onclick="openNav()"><img id="dealsplus" src="minus.svg"></span>
                                                </div>
                                                <button class="dailydeals-addbutton" style="">ADD</button>
                                            </fieldset>
      
      </div>
      </div>
      </div>

      </div><!-- /grid-b -->

      <button class="dailydeals-viewbutton" style="margin-left:137px;">View More</button>
      
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
  


</body>
</html>


</body>