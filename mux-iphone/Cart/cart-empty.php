<?php 
        session_start();
        $_SESSION['page-type']= 'empty-cart';
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
        <link rel="stylesheet" type="text/css" href="cart-empty.css">

    </head>

     <body>
           
           <div class="ui-grid-a" style="padding: 10px 20px">
                   <div class="ui-block-a"> 
                       <div class = "cart-title">Shopping Cart</div>
                    </div>

                     <div class="ui-block-b">
                            <div class = "item-title">Items (0)</div>
                    </div>
            </div>

            <div class = "cart-empty-text"> Looks like your cart is empty .... </div>
            <img src = "../assets/images/sad-cart.png" id = "sad-cart-image">
            <button class ="shop-now-button" onclick="window.location.href='../home-page/home.php';" > Shop Now </button>

            
    </body>


<?php include '../templates/footer.php'; ?>

                    
                
