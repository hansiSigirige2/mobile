<div data-role="page" id="home" class="page-full" style="background-color: white;">

<?php 
        session_start();
        $_SESSION['page-type']= 'aboutus';
	?>
	<?php include '../templates/header.php'; ?>




<!DOCTYPE html>
<html>
    <head>

        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <!--<link rel = "stylesheet" href = "sample.css">-->
        <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <link rel="stylesheet" type="text/css" href="about-us.css">
    </head> 


    <body>
        <img src="../assets/images/about-us.jpg" class = "image" width = "100%" >

        <div class = "heading-main"> About Us </div>

        <div class = "text"> We pioneered the short supply chain so you can experience fresh food at its finest. Food 
                                comes to us straight from the source and is delivered to your door at peak freshness in just 
                                a few days. That's less handling by middlemen and it puts more money in the bank for local 
                                farmers, skilled artisans and responsible fishermen.
        </div>
        <div class="aboutus-video" controls>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/z5z-nF65-Qc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <div class = "heading-main"> Convenience Shouldn't Mean Compromise </div>

        <div class = "text"> We make it easy to find nutritional information-calories, Ingredients and allergens-so you 
                                know exactly what you're getting. Our stores Augmented Reality feature allows you to take a 
                                picture of your favourite promotion with it's own brand banner and share it with your friends 
                                to earn loyally points

    </body>





<?php include '../templates/footer.php'; ?>
                    
                       

        

    