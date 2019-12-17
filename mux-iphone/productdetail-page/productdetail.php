<div data-role="page" id="home" class="page-full">

	<?php 
    session_start();
    $_SESSION['page-type']= 'product-detail';
	?>
	<?php include '../templates/header.php'; ?>
	<header>
	<link rel="stylesheet" href="../productdetail-page/productdetail.css">
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
<h2 class = "product-details">AMBEWELA FRESH MILK(1L)</h2>
<h4>Bevarages, Milk</h4>

<img src="../assets/images/ambewela.jpg" class="productdetail-image" >

<br>
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

  <span onclick="changeImage3()"><img class="productdetail-heart" id="favdeals3" src="heart.svg"></span>

  <div class="ui-grid-a" style="padding: 10px 20px"    >
                        <div class="ui-block-a"> 
                            <div class = "product-name">Ambewela Fresh Milk </div>
                            <span class = "pprice">Rs 110</span>
                            <span class = "pprice"><strike> Rs 220</strike></span>
                            <div class = "productquantity">Quantity</div>
                                            <fieldset class="ui-grid-b">
                                                <div class="ui-block-a">
                                                    <span onclick="openNav()"><img id="productminus" src="minus.svg"></span>
                                                </div>
                                                <div class="ui-block-b">
                                                    <input type="number" name="quantity" id="productquantity" value="1" />
                                                </div>
                                                <div class="ui-block-c">
                                                <span onclick="openNav()"><img id="productplus" src="plus.svg"></span>
                                                </div>
                                            </fieldset>
                                        
                        </div>

  <script>
      function changeImage3()
        {
        var img = document.getElementById("favdeals3");
        img.src="heart (selected).png";
        }

      </script>
