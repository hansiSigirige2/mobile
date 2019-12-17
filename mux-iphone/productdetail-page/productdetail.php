<div data-role="page" id="home" class="page-full">

	<?php 
    session_start();
    $_SESSION['page-type']= 'product-detail';
	?>
	<?php include '../templates/header.php'; ?>
	<header>
  <link rel="stylesheet" href="../productdetail-page/productdetail.css">
  
		<link rel="stylesheet" href="../assets/styles/header.css">
		<!-- <script src="../assets/scripts/main.js"></script> -->
	</header>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
  <script>
      function changeImage3()
        {
        var img = document.getElementById("favdeals3");
        img.src="heart (selected).png";
        }

      </script>

<h2 class = "product-details">AMBEWELA FRESH MILK(1L)</h2>
<h4 class ="product-details-sub">Bevarages, Milk</h4>

<img src="../assets/images/email.png" class="productoffer-image" >
<img src="../assets/images/ambewela.jpg" class="productdetail-image" >

<br>
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

  <span onclick="changeImage3()"><img class="productdetail-heart" id="favdeals3" src="heart.svg"></span>

  <div class = "product-name" >AMBEWELA IS PRODUCED USING PREMIUM QUALITY PURE COW'S MILK FROM AMBEWELA FARM </div>

  <div class="ui-grid-a" style="padding: 10px 20px"    >
                    
                            <div class = "pprice">Rs 110</div>
                            <div class = "sprice"><strike> Rs 220</strike></div>

                            <div class="ui-grid-a">
                              <div class="ui-block-a" style="margin-top: 10px; width: 30% !important"> 
                                <span class = "quantity">QUANTITY:</span>
                              </div>
                              <div class="ui-block-b"> 
                                            <fieldset class="ui-grid-b">
                                                <div class="ui-block-a">
                                                    <span onclick="openNav()"><img id="minus" src="minus.svg"></span>
                                                </div>
                                                <div class="ui-block-b">
                                                    <input type="number" name="quantity" id="quantity" value="1" />
                                                </div>
                                                <div class="ui-block-c">
                                                <span onclick="openNav()"><img id="plus" src="plus.svg"></span>
                                                </div>
                                            </fieldset>
                              </div>  
                             
                        </div>
<div class= "product-addtocart" > 
<button id= "product-addtocart" onclick="openPopup()">ADD TO CART</button>
</div>

<div class= "product-buynow" > 
<button id= "product-buynow" onclick="openPopup()">BUY NOW</button>
</div>

<h4 class ="product-details-otherdeals">OTHER DEALS</h4>


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
