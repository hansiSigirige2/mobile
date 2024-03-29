<div data-role="page" id="contact" class="page-full" style="background-color: white;">

	<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
	<header>
	<link rel="stylesheet" href="../contactus-page/contactus.css">
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>

<script>
  function openPopup(){
    $("#myModal").modal();
  }

</script>

	</header>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>

  <script>
    function openPopup(){
      $("#myModal").modal();
    }

  </script>


  <div class="container">
<h2 class="c2">Contact Us</h2>

<img src="../assets/images/location.png" class="contactus-image">

<h5 class = "address">No 08, Serpentine Road, Colombo</h5>
<img src="../assets/images/google map.jpg" class="contactus-googlemap">

    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3mFoVhiQaQ3uD-UGr4fdxzV6Xz3i6LDk&callback=initMap"
    async defer></script>

<br>
<img src="../assets/images/phone.png" class="contactus2-image">
<h5 class = "telephone">07861166325</h5>
<br>
<img src="../assets/images/email.png" class="contactus-image">
<h5 class = "email">ZUPERMART.CUSTOMER.@MAIL.COM</h5>
<br>
<img src="../assets/images/message.png" class="contactus-image">


<br>

<textarea rows ="4" cols="10" id= "contactustextarea"> Enter Text Here </textarea>
<br>
<textarea rows ="1" cols="10" id= "emailextarea"> Email </textarea>

<button class="sendBtn" id="categories-viewbutton" onclick="openPopup()">SEND MESSAGE</button>

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



<?php include '../templates/footer.php'; ?>
