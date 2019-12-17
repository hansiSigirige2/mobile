<?php 
    session_start();
    $_SESSION['page-type']= 'checkout';
	include '../templates/header.php';
?>


<header>
    <link rel="stylesheet" href="checkout.css">
</header>

<!-- checkout -->
<div class="ui-grid-b checkout-container">
    <div class="ui-block-a checkout-title">CHECKOUT</div>
    <!-- cart -->
    <div class="ui-grid-a card-container">
        <div class="ui-block-a cart-title">CART</div>
        <div class="ui-block-b text-right padding-edit">
            <img onclick="window.location.href='../Cart/cart.php';"class="edit-image" src="../assets/images/edit.png" alt="">
        </div>

        <!-- cards -->
        <div class="ui-block-a cards-small-container">
            <?php 	
			$cart_json = file_get_contents('../data/cart.json');
			$cart_arr = json_decode($cart_json, true);
        
			if(count($cart_arr) === 0 ){
				echo '<div class ="ui-grid-a">Sorry no items found</div>';

			}else{
				if ($_SESSION['orientation'] == "land") {
					echo '<div class ="ui-grid-b">';
				} 
				else {
					echo '<div class ="ui-grid-a">';						
				}		
				
				for ($x = 0; $x <count($cart_arr); $x++) {
					if ($x === 0){
						echo '<div class ="ui-block-a product-padding">';
					}
					else{
						echo '<div class ="ui-block-b product-padding">';
					}
						echo'<div class="card cart-card">';
						echo '<img class="card-img-top card-image-border" src="'.$cart_arr[$x]['image'].'" alt="Card image cap">';					
						echo '</div>';
						echo '</div>';
				}
				echo '</div>';
			}?>
            <!-- cards cart end -->
        </div>
        <!-- cards -->
    </div>
    <!-- cart -->
    <!-- delivery address -->
    <div class="ui-grid-solo delivery-address-container">
        <div class="deliver-title">Delivery ADDRESS</div>
        <div class="address-box">
            <textarea class="address-input"></textarea>
        </div>
    </div>
    <!-- delivery address -->
    <!-- delivery options -->
    <div class="ui-grid-solo delivery-options-container">
        <div class="deliver-options-title">Delivery OPtions</div>
        <div class="ui-grid-solo">
            <div class="standard-title">
                Standard
            </div>
            <div class="tiny-text">Delivered in 10 days</div>
            <?php
		if ($_SESSION['orientation'] == "port") {								
                                echo '<div class="radio">';	
                                echo '<div>Free</div>';	
                                echo '<input type="radio" value ="standard" onclick="getDelivery(value)" name="shippingradio">';	
                                echo '</div>';
							} 
							else {
                                echo '<div class="radio-land">';
                                echo '<div>Free</div>';			
                                echo '<input type="radio" value ="standard" onclick="getDelivery(value)" name="shippingradio">';	
                                echo '</div>';
							}					
		?>

        </div>
        <div class="ui-grid-solo">
            <div class="standard-title">
                Express
            </div>
            <div class="tiny-text">Delivered in 1 day</div>
            <?php
		if ($_SESSION['orientation'] == "port") {								
                                echo '<div class="radio">';	
                                echo '<div class="price-label">RS.300</div>';	
                                echo '<input type="radio" value ="express" onclick="getDelivery(value)" name="shippingradio">';	
                                echo '</div>';
							} 
							else {
                                echo '<div class="radio-land">';
                                echo '<div class="price-label">RS.300</div>';			
                                echo '<input type="radio" value ="express" onclick="getDelivery(value)" name="shippingradio">';	
                                echo '</div>';
							}					
		?>
        </div>
    </div>

    <div class="ui-grid-solo payment-container">
        <div class="loyalty-section">
            <div class="loyalty-title">AVailable Loyalty Points</div>
            <?php 	
			$user_json = file_get_contents('../data/users.json');
            $user_arr = json_decode($user_json, true);
            $loyaltypoints;
            foreach($user_arr as $var){
            if ($var['user_id']==$loggedinuser){
                $loyaltypoints=$var['loyalty_points'];
            }
            }
            echo ' <div class="loyalty-point">'.$loyaltypoints.'</div>';
            ?>
        </div>
        <div class="loyalty-section">
            <div class="loyalty-title">Redeem Amount</div>
            <input type="text" placeholder="100" class="redeem" onkeyup="getRedeem()" name="redeem" id="redeem">
        </div>
        <div class="ui-grid-a padding-money">
            <?php 	
			$cart_json = file_get_contents('../data/cart.json');
            $cart_arr = json_decode($cart_json, true);
            $cart_subtotal=0;
            $cart_discount=0;
            foreach($cart_arr as $var){
                $cart_subtotal += ($var['product_price'] * $var['quantity']);  
                $cart_discount += ($var['product_discount']* $var['quantity']);         
            }
           
            ?>
            <!-- one section -->
            <div class="ui-block-a text-left">
                <div class="middle-text">Subtotal</div>
            </div>
            <div class="ui-block-b text-right">
                <?php echo '<div class="middle-text">Rs.<span id="subtotalVal">'
            .$cart_subtotal.'</span> </div> ';?>

            </div>
            <!-- one section -->
            <!-- one section -->
            <div class="ui-block-a text-left">
                <div class="middle-text">Delivery</div>
            </div>
            <div class="ui-block-b text-right">
                <div class="middle-text">Rs.
                    <span id="deliveryVal">0</span>
                </div>
            </div>
            <!-- one section -->
            <!-- one section -->
            <div class="ui-block-a text-left">
                <div class="middle-text">Discount</div>
            </div>
            <div class="ui-block-b text-right">
                <?php echo '<div class="middle-text green">Rs.<span id="discountVal">'.$cart_discount.'</span></div> ';?>
            </div>
            <!-- one section -->
            <!-- one section -->
            <div class="ui-block-a text-left">
                <div class="middle-text">Redeem</div>
            </div>
            <div class="ui-block-b text-right">
                <div class="middle-text green">
                    Rs.<span id="redeemVal">0</span></div>
            </div>
            <!-- one section -->
            <!-- one section -->
          
            <div class="ui-block-a text-left">
                <div class="middle-text">Total</div>
            </div>
            <div class="ui-block-b text-right">
                <div class="middle-text">Rs.<span id="totalVal">
                        0</span></div>
            </div>
            <!-- one section -->

        </div>
        <div class="ui-grid-solo text-center">
        <button onclick="window.location.href='../payment-page/payment.php';" type="button"id="paymentproceed" class="btn btn-primary" disabled >Proceed to Payment</button>
        </div>
    </div>
    <!-- checkout container ends below -->
</div>



<?php include '../templates/footer.php'; ?>