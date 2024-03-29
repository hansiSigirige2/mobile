<div data-role="page" id="home" class="page-full" style="background-color: white;">

<?php 
		session_start();
		$_SESSION['page-type']= 'catalog';
		include '../templates/header.php';
	?>
	



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
    <span class = "cart-title"> Shopping Cart </span>
    <span class = "item-title"> Item  </span>
    <?php
		
		$products_json = file_get_contents('../data/cart.json');
        $prod_arr = json_decode($products_json, true);
        
        
            $cart_subtotal=0;
            $cart_discount=0;
            $cart_total=0;

            foreach($prod_arr as $var){
                $cart_subtotal += ($var['product_price'] * $var['quantity']);  
                $cart_discount += (($var['product_price'] - $var['discounted_price'])* $var['quantity']);
                $cart_total += ($var['discounted_price'] * $var['quantity']);

            }
           
  
            foreach($prod_arr as $var){
            echo '<div class="ui-grid-a">';
            echo            '<div class="ui-block-a detail-block">'; 

            echo               '<div class = "product-name">'.$var['product_name'].'</div>';
            echo               '<span class = "dprice">Rs.'.$var['discounted_price'].'</span>';
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

            <button id="clear-button" onclick="window.location.href='../cart/cart-empty.php';" >Clear Cart</button>

               
                <div class = "ui-grid-a" style="padding: 10px 20px">
                    <div class = "ui-block-a bill-block">
                        <div class = "bill"> Subtotal </div>
                        <div class = "bill"> Discount </div>
                        <div class = "bill"> Total </div>
                    </div>

                    <div class = "ui-block-b amount-block">
                <?php  echo'
                        <div class = "amount">Rs'.$cart_subtotal.' </div>
                        <div class = "discount-amount">Rs'.$cart_discount.' </div>
                        <div class = "amount">Rs'.$cart_total.' </div>
                '?>
                    </div>
                </div>

                <button class = "submit-button" onclick="window.location.href='../checkout/checkout.php';"> Proceed to Checkout </button>
            
</body> 

<?php include '../templates/footer.php'; ?>


                    
                    
