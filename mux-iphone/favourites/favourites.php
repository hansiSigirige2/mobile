

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
           <div data-role = "page" id = "favourites-page">
                <div class="ui-grid-a" style="padding: 10px 20px"    >
                        <div class="ui-block-a"> 
                            <div class = "cart-title">Favourites</div>
                            <div class = "product-name">Apple Juice </div>
                            <span class = "dprice">Rs 700</span>
                            <div class = "quantity">Quantity</div>
                                            <fieldset class="ui-grid-b">
                                                <div class="ui-block-a">
                                                    <span ><img type="button" id="minus" src="../assets/images/minus.svg" onclick="minus()" ></span>
                                                </div>
                                                <div class="ui-block-b">
                                                    <input type="number" name="quantity" id="quantity" value="1" />
                                                </div>
                                                <div class="ui-block-c">
                                                <span><input type = "button" img id="plus" src="../assets/images/plus.svg" onclick="plus()"></span>
                                                </div>
                                            </fieldset>
                                        
                        </div>
 
                       

                        <div class="ui-block-b">
                            <div class = "item-title">Items ()</div>
                            <img src = "../assets/images/apple.jpg" id = "product-image">
                            <br><br>
                            <img src = "../assets/images/bin.png" class = "favourites-bin">
                        </div>
                </div>


                <hr>

                
                            <button class = "share-button"  >Share Favourites</button>
                   
                
                <button class = "add-button"> Add to Cart  </button>
                <br>
                <button class = "submit-button" onclick="window.location.href='../favourites/favourites-empty.php';"> Clear Favourites </button>
</div>
