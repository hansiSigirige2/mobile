<div data-role="page" id="home" class="page-full" style="background-color: white;">

<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>

    
	<header>
	 <link rel="stylesheet" href="../signup/signup.css">
        <link rel="stylesheet" href="../assets/styles/header.css">
        <link rel="stylesheet" href="../assets/styles/footer.css">
		<script src="../assets/scripts/main.js"></script>
	</header>


<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
       
        
        <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head> 
    <body>
    <div style="background-image: url('../assets/images/signup.jpg'); background-size: 100% 100%;">
        <br><br><br>
        <div class="ui-grid-solo">
           <!-- <div class="ui-block-a">    
            </div> -->
            <div class="ui-block-a" align=center style="background-color: #ffffff">
                <h1 align=center> Sign Up </h1>
                <br>
                <form align=left action="handler.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="" placeholder="" width="10px" />
                    <label for="number">Mobile Number</label>
                    <input type="text" name="number" id="number" value="" placeholder="" />
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="" placeholder="" />
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="" placeholder="" />
                    <label for="conpassword">Confirm Password</label>
                    <input type="password" name="conpassword" id="conpassword" value="" placeholder="" />
                </form>
                
                <a href="../home-page/home.php" class="button-signup" data-role="button" data-inline="true">Sign Up</a>
                <!-- <button class="button">Sign Up</button>-->
                
                <hr>
                <br>
                <div align=center>
                    <a href="https://www.google.com/"><img src="../assets/images/google.svg" alt="google" width="20%" hspace="5"></a>
                    <a href="https://www.facebook.com/"><img src="../assets/images/facebook.svg" alt="facebook" width="20%" hspace="5"></a>                       
                    
                    <br>
                    <br>
                    <p>Already have an account? <a href="../Login/login.php">Login</a> </p>  
                </div>          
            </div>
        </div>
    </div>           
    </body>
    <div class="footer-padding"></div>

<?php include '../templates/footer.php'; ?>

</html>        

     