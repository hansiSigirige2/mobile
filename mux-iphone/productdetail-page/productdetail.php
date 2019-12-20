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

    <?php
        if(isset($_POST['addToCard'])) { 

            if(isset($_POST['quantity'])) { 
                $quantity = $_POST['quantity'];

                $cart_json = file_get_contents('../data/cart.json');
                $cart_arr = json_decode($cart_json, true);
                
                $products_json = file_get_contents('../data/products.json');
                $products_arr = json_decode($products_json, true);
        
                $output = array_filter($products_arr, function($value) {
                    return $value["product_id"] == $_SESSION['currentProduct']; 
                });
        
                foreach ( $output as $obj ){
                    if ( $obj["product_id"] == $_SESSION['currentProduct'] ) {
                        $obj["quantity"] = $quantity;
                        array_push($cart_arr, $obj);
                    }
                }
                
                $newCart = json_encode($cart_arr);
                file_put_contents('../data/cart.json', $newCart);
            }
        } 
    ?>


    <?php 
        $products_json = file_get_contents('../data/products.json');
        $products_arr = json_decode($products_json, true);
        $output = array_filter($products_arr, function($value) {
            return $value["product_id"] == $_SESSION['currentProduct']; 
        });
        
        foreach ( $output as $obj ){
            if ( $obj["product_id"] == $_SESSION['currentProduct'] ) {
                echo '
                <h2 class="product-details" id="product-name">'.$obj['product_name'].'</h2>
                <h4 class="product-details-sub"'.$obj['product_detail'].'</h4>
    
                <img src="../assets/images/50off.svg" class="productoffer-image">
                <img id="product-image" src="'.$obj['image'].'" class="productdetail-image">

                <span onclick="onFavClick()"><img class="productdetail-heart" id="favdeals3" src="../assets/images/heart.svg"></span>


                <div class="rating-stars text-center">
                    <ul id="stars">
                    <li class="star" title="2" data-value="1">
                        <i class="fa fa-star fa-fw"></i>
                    </li>
                    <li class="star" title="2" data-value="2">
                        <i class="fa fa-star fa-fw"></i>
                    </li>
                    <li class="star" title="3" data-value="3">
                        <i class="fa fa-star fa-fw"></i>
                    </li>
                    <li class="star" title="4" data-value="4">
                        <i class="fa fa-star fa-fw"></i>
                    </li>
                    <li class="star" title="5" data-value="5">
                        <i class="fa fa-star fa-fw"></i>
                    </li>
                    </ul>
                </div>




                <div class="product-name">'.$obj['product_detail'].'</div>
    
                <div class="ui-grid-a" style="padding: 10px -1px">
    
                    <div class="pprice" id="product-discount-price" >Rs.'.$obj['discounted_price'].'</div>
                    <div class="sprice"><strike id="product-price">Rs.'.$obj['product_price'].'</strike></div>
                    <span class="quantity" ">QUANTITY </span>
                    <br>
                    <div class="ui-grid-a">
                        <div class="ui-block-a" style="margin-top: 10px; width: 30% !important" >
                            
                        </div>
                        <div class="ui-block-b">
                            <fieldset class="ui-grid-b">
                                <div class="ui-block-a">
                                    <span onclick="minus()"><img id="minus" src="../assets/images/minus.svg"></span>
                                </div>
                                <div class="ui-block-b">
                                    <input type="text" size="25" value="1" class="counter" id="quantity" data-role="none">
                                </div>
                                <div class="ui-block-c">
                                    <span onclick="plus()"><img id="plus" src="../assets/images/plus.svg"></span>
                                </div>
                            </fieldset>
                        </div>
                    </div>
            ';
            }
        }
    ?>

        <form method="post"> 
            <input type="submit" name="addToCard" value="ADD TO CART"/> 
            <input type="hidden" name="quantity" value='1' id="hiddenCount">

            <input type="submit" name="addToCard" value="BUY NOW" />
        </form> 

        <h4 class="product-details-otherdeals">OTHER DEALS</h4>

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
                      <span onclick="changeImage2()"><img class="heart" id="favdeals2" src="../assets/images/heart.svg"></span>
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

    <div style="margin-bottom: 100px;">
        <h4>Review and Comments</h4>
        <br>
        <textarea rows ="4" cols="10" id="commentTextarea" placeholder="Type Comment"></textarea>
        <br>
        <button class="sendBtn" id="categories-viewbutton" onclick="onAddComment()">Add Comment</button>

        <div id="commentList"></div>
    </div>

    <script type="text/javascript" src="./script.js"></script>

</div>
</div>
        
<?php include '../templates/footer.php'; ?>