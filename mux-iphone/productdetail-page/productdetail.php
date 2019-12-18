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
					  <div class="image-data">
					  <img  src="'.$products_arr[$x]['image'].'" class="dailydeals-image" style = "height: 131px;">
					  </div>
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

  <br>
  <br>


      

      </div>
    </div>
</div>

<div class="footer-padding"></div>

<?php include '../templates/footer.php'; ?>