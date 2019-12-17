<?php 
        session_start();
        $_SESSION['page-type']= 'cart';
	?>
	<?php include '../templates/header.php'; ?>



<!DOCTYPE html>
<html>
    <head>

        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <!--<link rel = "stylesheet" href = "sample.css">-->
        <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cart.css">


<script>

var count = 1;
    var countEl = document.getElementById("quantity");
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


   
    </head> 
    <body>
           
                <div class="ui-grid-a" style="padding: 10px 20px"    >
                        <div class="ui-block-a"> 
                            <div class = "cart-title">Shopping Cart</div>
                            <div class = "product-name">Apple Juice </div>
                            <span class = "dprice">Rs 700</span>
                            <div class = "quantity">Quantity</div>
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
 
                       

                        <div class="ui-block-b">
                            <div class = "item-title">Items ()</div>
                            <img src = "..\apple.jpg" id = "product-image">
                            <br><br>
                            <img src = "..\bin.png" class = "cart-bin">
                        </div>
                </div>


                <hr>

                <div class="ui-grid-a" style="padding: 10px 20px"    >
                        <div class="ui-block-a"> 
                            <div class = "product-name">Ambewela Fresh Milk </div>
                            <span class = "dprice">Rs 110</span>
                            <span class = "nprice"><strike> Rs 220</strike></span>
                            <div class = "quantity">Quantity</div>
                                            <fieldset class="ui-grid-b">
                                                <div class="ui-block-a">
                                                    <span ><img id="minus" src="minus.svg" onclick="minus()"></span>
                                                </div>
                                                <div class="ui-block-b">
                                                    <input type="number" name="quantity" id="quantity" value="1" />
                                                </div>
                                                <div class="ui-block-c">
                                                <span ><img id="plus" src="plus.svg" onclick="plus()"></span>
                                                </div>
                                            </fieldset>
                                        
                        </div>
 
                       

                        <div class="ui-block-b">
                            <img src = "..\apple.jpg" id = "product-image">
                            <br><br>
                            <img src = "..\bin.png" class = "cart-bin">
                        </div>
                </div>
                <hr>
               
                <button id = "clear-button" onclick="window.location.href='../cart/cart-empty.php';"  >Clear Cart</button>
                        
                <div class = "ui-grid-a" style="padding: 10px 20px">
                    <div class = "ui-block-a">
                        <div class = "bill"> Subtotal </div>
                        <div class = "bill"> Discount </div>
                        <div class = "bill"> Total </div>
                    </div>

                    <div class = "ui-block-b">
                        <div class = "amount">Rs 1160 </div>
                        <div class = "amount">Rs 460 </div>
                        <div class = "amount">Rs 700 </div>
                    </div>
                </div>

                <button class = "submit-button"> Proceed to Checkout </button>
            
</body>

<div class="footer-padding"></div>

<?php include '../templates/footer.php'; ?>
                    
                       

        
     