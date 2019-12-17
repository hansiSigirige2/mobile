<?php 
		session_start();
	?>
    <?php include '../templates/header.php'; 
    $_SESSION['page-type']= 'favorite';?>




<!DOCTYPE html>
<html>
    <head>

        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <!--<link rel = "stylesheet" href = "sample.css">-->
        <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" type="text/css" href="favourites.css">


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
                            <div class = "cart-title">Favourites</div>
                            <div class = "product-name">Apple Juice </div>
                            <span class = "dprice">Rs 700</span>
                            <div class = "quantity">Quantity</div>
                                            <fieldset class="ui-grid-b">
                                                <div class="ui-block-a">
                                                    <span onclick="plus()"><img id="minus" src="minus.svg"></span>
                                                </div>
                                                <div class="ui-block-b">
                                                    <input type="number" name="quantity" id="quantity" value="1" />
                                                </div>
                                                <div class="ui-block-c">
                                                <span><input type = "button" img id="plus" src="plus.svg" onclick="minus()"></span>
                                                </div>
                                            </fieldset>
                                        
                        </div>
 
                       

                        <div class="ui-block-b">
                            <div class = "item-title">Items ()</div>
                            <img src = "..\apple.jpg" id = "product-image">
                            <br><br>
                            <img src = "..\bin.png" height = "25" width = "25" align = "right">
                        </div>
                </div>


                <hr>

                <div class="ui-grid-b">
                        <div class = "ui-block-a">
                            
                        </div>

                        <div class = "ui-block-b">

                        </div>

                        <div class = "ui-block-c">
                            <button class = "btn" >Share Favourites</button>
                        </div>
                </div>

                
                <button class = "add-button"> Add to Cart  </button>
                <button class = "submit-button"> Clear Favourites </button>