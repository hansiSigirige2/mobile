<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>

<link rel="stylesheet" href="../assets/home-page/home.css">
<!-- carousel indicators -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" style ="top: 141px !important;">
    <li data-target="#carouselExampleIndicators" style="border-radius: 50% !important; width: 10px !important;height: 10px !important;" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" style="border-radius: 50% !important; width: 10px !important;height: 10px !important;" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" style="border-radius: 50% !important; width: 10px !important;height: 10px !important;" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/images/img1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/images/img2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/images/img3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php include '../templates/footer.php'; ?>