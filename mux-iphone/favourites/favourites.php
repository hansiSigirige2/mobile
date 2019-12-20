<div data-role="page" id="favourites" class="page-full" style="background-color: white;">

<?php 
	session_start();
	$_SESSION['page-type']= 'category';
	include '../templates/header.php';
?>
<!DOCTYPE html>
<html>
    <head>

        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" type="text/css" href="favourites.css">

        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="sendEmail.js"></script>

    </head> 
    <body>
        <div data-role = "none" id = "favourites-page">

                <span class = "cart-title">Favourites</span>
                <span class = "item-title">Items</span>

                <div id="favList"></div>
                <hr>
                <button class = "share-button" onclick="sendEmail()">Share Favourites</button>
                <button class = "add-button" onclick="window.location.href='../home-page/home.php';"> Continue Shopping  </button>
                <br>
                <button class = "submit-button" onclick="window.location.href='../favourites/favourites-empty.php';"> Clear Favourites </button>
                <br>
                <br>
                <br>
                <br>
        </div>

        <script>
            function loadFavouriteList() {
                let favouriteList = localStorage.getItem("favouriteList");
                favouriteList = (favouriteList) ? JSON.parse(favouriteList) : []
                console.log(favouriteList)

                let outputHtml = ``;
                favouriteList.map(x => {
                    outputHtml += `
                    <div class="ui-grid-a" style="padding: 10px 20px"    >
                        <div class="ui-block-a"> 
                            <div class = "product-name">${x.productName}</div>
                            <span class = "dprice">${x.productPrice}</span>
                            <span class = "price">${x.discountedPrice}</span>
                        </div>

                        <div class="ui-block-b">
                            <img src = "${x.productImageUrl}" id = "product-image">
                        </div>
                    </div>
                    `
                })
                $("#favList").html(outputHtml);
            }
            
            loadFavouriteList();
        </script>

<?php include '../templates/footer.php'; ?>