<div data-role="page" id="home" class="page-full">

	<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
	<header>
	<link rel="stylesheet" href="../contactus-page/contactus.css">
		<link rel="stylesheet" href="../assets/styles/header.css">
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>

<script>
  function openPopup(){
    $("#myModal").modal();
  }

</script>

	</header>




  <div class="container">
<h2 class="c2">Contact Us</h2>

<img src="../assets/images/location.png" class="contactus-image">

<h5 class = "address">No 08, Serpentine Road, Colombo</h5>
<img src="../assets/images/google map.jpg" class="contactus-googlemap">

<br>
<img src="../assets/images/phone.png" class="contactus2-image">
<h5 class = "telephone">07861166325</h5>
<br>
<img src="../assets/images/address.png" class="contactus-image">
<h5 class = "email">ZUPERMART.CUSTOMER.@MAIL.COM</h5>
<br>
<img src="../assets/images/location pin.svg" class="contactus-image">


<br>

<textarea rows ="4" cols="25" class= "contactustextarea"> Enter Text Here </textarea>
<br>
<textarea rows ="1" cols="25" class= "emailextarea"> Email </textarea>

<button id="sendBtn" class="categories-viewbutton" onclick="openPopup()">SEND MESSAGE</button>

<div class="modal"  id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p class="submit-mesage">YOUR MESSAGE HAS BEEN SUBMITTED!</p>
        <div class="button-center">
          <button class="contact-viewbutton" data-dismiss="modal">OK</button>
        </div>
      </div>
      <!-- <div class="modal-footer">
      
      </div> -->
    </div>
  </div>
</div>


  </div>



  <div class="footer-padding"></div>

<?php include '../templates/footer.php'; ?>
