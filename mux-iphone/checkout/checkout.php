

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
    <div class="ui-grid-b card-container">
    <div class="ui-block-a cart-title">CART</div>
    <div class="ui-block-c">
        <img class="edit-image" src="../assets/images/edit.png" alt="">
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
			}
			
		
		
		
?>
<!-- cards cart end -->
   
</div>
    <!-- cards -->

    </div>
      <!-- cart -->
<!-- delivery address -->
<div class="delivery-address-container">
    <div class="deliver-title">Delivery ADDRESS</div>
    <div class="address-box">
    <textarea class ="address-input"></textarea>
    </div>
</div>
   


   

<?php include '../templates/footer.php'; ?>