<?php 
		session_start();
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


   
    </head> 
    <body>
           
                <div class="ui-grid-a" style="padding: 10px 20px"    >
                        <div class="ui-block-a detail-block"> 
                            <div class = "cart-title">Shopping Cart</div>
                            <div class = "product-name">Apple Juice </div>
                            <span class = "dprice">Rs 700</span>
                            <div class = "quantity">Quantity</div>
                                            <fieldset class="ui-grid-b">
                                                <div class="ui-block-a minus-box">
                                                    <span><input type = "image" id="minus" src="minus.svg" onclick = "minus()"></span>
                                                </div>
                                                <div class="ui-block-b quantity-box">
                                                    <input type="number" name="count" id="count" value="1" />
                                                </div>
                                                <div class="ui-block-c plus-box">
                                                <span><input type = "image" id="plus" src="plus.svg" onclick = "plus()"></span>
                                                </div>
                                            </fieldset>
                                        
                        </div>
 
                       

                        <div class="ui-block-b image-block">
                            <div class = "item-title">Items ()</div>
                            <img src = "..\apple.jpg" id = "product-image">
                            <br><br>
                            <img src = "..\bin.png" class = "cart-bin">
                        </div>
                </div>


                <hr>

                <div class="ui-grid-a" style="padding: 10px 20px"    >
                        <div class="ui-block-a detail-block"> 
                            <div class = "product-name">Ambewela Fresh Milk </div>
                            <span class = "dprice">Rs 110</span>
                            <span class = "nprice"><strike> Rs 220</strike></span>
                            <div class = "quantity">Quantity</div>
                                            <fieldset class="ui-grid-b">
                                                <div class="ui-block-a minus-box">
                                                    <span ><input type = "button" img id="minus" src="minus.svg" onclick="minus()"></span>
                                                </div>
                                                <div class="ui-block-b quantity-box">
                                                    <input type="number" name="quantity" id="count" value="1" />
                                                </div>
                                                <div class="ui-block-c plus-box">
                                                <span ><input type ="button" img id="plus" src="plus.svg" onclick="plus()"></span>
                                                </div>
                                            </fieldset>
                                        
                        </div>
 
                       

                        <div class="ui-block-b image-block">
                            <img src = "..\apple.jpg" id = "product-image">
                            <br><br>
                            <img src = "..\bin.png" class = "cart-bin">
                        </div>
                </div>
                <hr>
               
                <button id = "clear-button" onclick="window.location.href='../cart/cart-empty.php';"  >Clear Cart</button>
                        
                <div class = "ui-grid-a" style="padding: 10px 20px">
                    <div class = "ui-block-a bill-block">
                        <div class = "bill"> Subtotal </div>
                        <div class = "bill"> Discount </div>
                        <div class = "bill"> Total </div>
                    </div>

                    <div class = "ui-block-b amount-block">
                        <div class = "amount">Rs 1160 </div>
                        <div class = "amount">Rs 460 </div>
                        <div class = "amount">Rs 700 </div>
                    </div>
                </div>

                <button class = "submit-button"> Proceed to Checkout </button>
            
</body>

<div class="footer-padding"></div>

<?php include '../templates/footer.php'; ?>
                    
                       

        
     