<div data-role="page" id="home" class="page-full">

	<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
	<header>
	<link rel="stylesheet" href="../home-page/home.css">
		<link rel="stylesheet" href="../assets/styles/header.css">
		<script src="../assets/scripts/main.js"></script>
	</header>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Card Deck</h2>
  <div class="card-deck">
    <div style = "boxshadow">
      <div class="card-body text-center" border="20px">
        <img src="C:\Users\Sachin Rajaratnam\Desktop\Card\dairy.jpg" alt="card" style="float:center;width:150px;height:150px;">
        <hr></hr>
        <h1> Dairy Milk </h1>
        <p class="card-text">Some text inside the first card</p>
      </div>
    </div>
    <div class="card bg-warning">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the second card</p>
      </div>
    </div>
    <div class="card bg-success">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the third card</p>
      </div>
    </div>
    <div class="card bg-danger">
      <div class="card-body text-center">
        <p class="card-text">Some text inside the fourth card</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>


</body>