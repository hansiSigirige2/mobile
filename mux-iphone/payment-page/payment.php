<?php 
    session_start();
    $_SESSION['page-type']= 'payment';
	include '../templates/header.php';
?>


<header>
    <link rel="stylesheet" href="payment.css">
</header>

<!-- checkout -->
<div class="ui-grid-b checkout-container">
    <div class="ui-block-a checkout-title">PAYMENT METHOD</div>

    <!-- delivery options -->
    <div class="ui-grid-solo delivery-options-container">
  
        <div class="ui-grid-solo borders">
            <div class="standard-title">
                CASH ON DELIVERY
            </div>
       
            <?php
		if ($_SESSION['orientation'] == "port") {								
                                echo '<div class="radio">';	
                                echo '<input type="radio" value ="standard" onclick="getDelivery(value)" name="shippingradio">';	
                                echo '</div>';
							} 
							else {
                                echo '<div class="radio-land">';		
                                echo '<input type="radio" value ="standard" onclick="getDelivery(value)" name="shippingradio">';	
                                echo '</div>';
							}					
		?>
            <!-- image for card -->
            <div class="ui-grid-solo">
            <img class="cod"src="../assets/images/codImage.png" alt="">
            </div>
             <!-- image for card -->
        </div>
        <div class="ui-grid-solo borders cardpay-container">
            <div class="standard-title">
                CARD
            </div>
            <?php
		if ($_SESSION['orientation'] == "port") {								
                                echo '<div class="radio">';	
                                echo '<input type="radio" value ="express" onclick="getDelivery(value)" name="shippingradio">';	
                                echo '</div>';
							} 
							else {
                                echo '<div class="radio-land">';		
                                echo '<input type="radio" value ="express" onclick="getDelivery(value)" name="shippingradio">';	
                                echo '</div>';
							}					
        ?>
        <!-- image for card -->
        <div class="ui-grid-solo">
            <img class="visa"src="../assets/images/visa.png" alt="">
            <img class="mastercard"src="../assets/images/mastercard.png" alt="">
            <img class="amex"src="../assets/images/amex.png" alt="">
            </div>
             <!-- image for card -->
        </div>
        <div class="ui-grid-solo borders stripepay-container">
            <div class="standard-title">
                STRIPE
            </div>
            <?php
		if ($_SESSION['orientation'] == "port") {								
                                echo '<div class="radio">';	
                                echo '<input type="radio" value ="express" onclick="getDelivery(value)" name="shippingradio">';	
                                echo '</div>';
							} 
							else {
                                echo '<div class="radio-land">';		
                                echo '<input type="radio" value ="express" onclick="getDelivery(value)" name="shippingradio">';	
                                echo '</div>';
							}					
        ?>
            <div class="stripe-payment">
                <form class="thin" action="charge.php" method="post" id="payment-form">
                    <div class="form-row">
                    <label for="card-element">
                        Credit or debit card
                    </label>
                    <div id="card-element" class="width">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                
                    <!-- Used to display Element errors. -->
                    <div id="card-errors" role="alert"></div>
                    </div>
                
                    <button class="btn-primary-charge">Submit Payment</button>
                </form>
            </div>
        </div>
    </div>
    <!-- checkout container ends below -->
</div>


<div class="modal fade" id="paymentMade" tabindex="-1" role="dialog" aria-labelledby="paymentMade" aria-hidden="true">
  <div class="modal-dialog model-box" role="document">
    <div class="modal-content">
      <div class="modal-header no-border">
        <h5 class="modal-title message-header-s" id="exampleModalLabel">Order confirmed!</h5></div>
            <div class="modal-footer no-border">
            <button type="button" class="btn btn-primary btn-primary-modal">OK</button>       
      </div>
    </div>
  </div>
</div>



<div class="footer-padding"></div>

<?php include '../templates/footer.php'; ?>
<script src="../assets/scripts/stripe.js"></script>