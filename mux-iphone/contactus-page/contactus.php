<div data-role="page" id="home" class="page-full">

	<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
	<header>
	<link rel="stylesheet" href="../contactus-page/contactus.css">
		<link rel="stylesheet" href="../assets/styles/header.css">
		<!-- <script src="../assets/scripts/main.js"></script> -->
	</header>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
</head>
<body>
<h2 class="c2">Contact Us</h2>

<img src="../assets/images/location pin.svg" class="contactus-image">

<h5 class = "address">No 08, Serpentine Road, Colombo</h5>
<img src="../assets/images/google map.jpg" class="contactus-googlemap">

<br>
<img src="../assets/images/location pin.svg" class="contactus2-image">
<h5 class = "telephone">07861166325</h5>
<br>
<img src="../assets/images/location pin.svg" class="contactus-image">
<h5 class = "email">ZUPERMART.CUSTOMER.@MAIL.COM</h5>
<br>
<img src="../assets/images/location pin.svg" class="contactus-image">


<br>

<textarea rows ="4" cols="25" class= "contactustextarea"> Enter Text Here </textarea>
<br>
<textarea rows ="1" cols="25" class= "emailextarea"> Email </textarea>

<button id="sendBtn" class="categories-viewbutton">SEND MESSAGE</button>

<script>
<!-- The Modal -->
<div id="sendModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>This Message has been successfully submitted</p>
  </div>

</div>


// Get the modal
var modal = document.getElementById("sendModal");

// Get the button that opens the modal
var btn = document.getElementById("sendBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>

