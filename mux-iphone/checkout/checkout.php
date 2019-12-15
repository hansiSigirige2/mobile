

<?php 
	session_start();
	include '../templates/header.php';
?>
	

<header>
<link rel="stylesheet" href="checkout.css">
</header>
<!-- checkout -->
<div class="ui-grid-b checkout-container">
    <div class="ui-block-a checkout-title">CHECKOUT</div>
    <!-- cart -->
    <div class="ui-block-a card-container">
    <div class="ui-block-a cart-title">CART</div>
    
        <img class="ui-block-c edit-image" src="../assets/images/edit.png" alt="">
   
    </div>
      <!-- cart -->
</div>
<!-- checkout -->


   

<?php include '../templates/footer.php'; ?>