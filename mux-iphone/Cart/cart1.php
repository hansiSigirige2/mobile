<div data-role="page" id="home" class="page-full" style="background-color: white;">

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
        <link rel="stylesheet" type="text/css" href="cart1.css">


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
    <?php
		
		$products_json = file_get_contents('../data/cart.json');
		$prod_arr = json_decode($products_json, true);		
        
           
                
           
            
            foreach($prod_arr as $var){
            echo '<div class="ui-grid-a">';
            echo            '<div class="ui-block-a detail-block">'; 
           

                
            echo               '<div class = "product-name">'.$var['product_name'].'</div>';
            echo               '<span class = "dprice">Rs.'.$var['product_discount'].'</span>';
            echo                '<span class = "nprice"><strike>Rs.'.$var['product_price'].'</strike></span>';
            echo               '<div class = "quantity">Quantity</div>';
            echo                               '<fieldset class="ui-grid-b">';
            echo                                   '<div class="ui-block-a minus-box">';
            echo                                        '<span><input type = "image" id="minus" src="../assets/images/minus.svg" onclick = "minus()"></span>';
            echo                                   '</div>';
            echo                                   '<div class="ui-block-b quantity-box">';
            echo                                        '<input type="number" name="count" id="count" value="'.$var['quantity'].'" />';
            echo                                    '</div>';
            echo                                    '<div class="ui-block-c plus-box">';
            echo                                    '<span><input type = "image" id="plus" src="../assets/images/plus.svg" onclick = "plus()"></span>';
            echo                                    '</div>';
            echo                                '</fieldset>';
            echo                                     '</div>';
 
                       

            echo            '<div class="ui-block-b image-block">';
            
            echo                '<img src = "'.$var['image'].'" id = "product-image">';
            echo                 '<br>';

                
            echo         '<br><br>';
            echo                '<img src = "..\bin.png" class = "cart-bin">';
            echo            '</div>';
            echo    '</div>';
            
                   

            echo    '<hr>';
            }
            ?>

                <!-- <div class="ui-grid-a" style="padding: 10px 20px"    >
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
                            <img src = "../assets/images/apple.jpg" id = "product-image">
                            <br><br>
                            <img src = "..../assets/images/bin.png" class = "cart-bin">
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


                    
                       

         -->