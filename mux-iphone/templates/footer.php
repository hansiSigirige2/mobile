<!-- jQuery Scripts -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- Bootstrap Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
<!--<script src="libraries/instascan.min.js"></script>-->

<!-- Custom Scripts -->
<script src="../assets/scripts/main.js"></script>

<link rel="stylesheet" href="../assets/styles/footer.css" >

<div class ="ui-grid-a footer">
	<div class ="ui-block-a text-left">
		<div class="footer-text about">About Us</div>
	</div>	
	<div class ="ui-block-a text-left">
		<div class="footer-text contact">Contact Us</div>
	</div>
	<div class ="ui-block-b text-right">
		<div class="footer-text terms">Terms and Conditions</div>
	</div>
</div>

<div class="footer-padding"></div>
<?php 


?>
<div class="ui-grid-c nav-bar">
	<div class="ui-block-a text-center">
<?php
	if (isset($_SESSION['page-type'])){
	if($_SESSION['page-type']== 'home'){
		echo'<img class="nav-icon" src="../assets/images/home-red.png" alt="">';
	}else{
		echo '<img class="nav-icon" src="../assets/images/home-black.png" alt="">';
	}
}?>
	</div>
	<div class="ui-block-b text-center">
	
	<?php
	if (isset($_SESSION['page-type'])){
	if($_SESSION['page-type']=='discount'){
		echo'<img class="nav-icon" src="../assets/images/discount-red.png" alt="">';
	}else{
		echo '<img class="nav-icon" src="../assets/images/discount-black.png" alt="">';
	}
}?>
	</div>
	<div class="ui-block-c text-center">
	<?php
	if (isset($_SESSION['page-type'])){
	if($_SESSION['page-type']=='category'){
		echo'<img class="nav-icon" src="../assets/images/category-red.png" alt="">';
	}else{
		echo '<img class="nav-icon" src="../assets/images/category-black.png" alt="">';
	}
}?>
	</div>
	<div class="ui-block-d text-center">
	<?php
	if (isset($_SESSION['page-type'])){
	if($_SESSION['page-type']=='favorite'){
		echo'<img class="nav-icon" src="../assets/images/heart-red.png" alt="">';
	}else{
		echo '<img class="nav-icon" src="../assets/images/heart-black.png" alt="">';
	}
}?>
	</div>
</div>



