<div data-role="page" id="login" class="page-full" style="background-color: white;">
    
<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
	<header>
	<link rel="stylesheet" href="../Login/login.css">
		<link rel="stylesheet" href="../assets/styles/header.css">
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
    <div style="background-image: url('../assets/images/login.jpg'); background-size: 100% 100%; ">
        <br><br><br>
        <div class="ui-grid-solo">
           <!-- <div class="ui-block-a">    
            </div> -->
            <div class="ui-block-a" align=center style="background-color: #ffffff">
                <h1 align=center> Login </h1>
                <br>
                <form align=left action="handler.php" method="post" >
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="" placeholder="" />
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" value="" placeholder="" />
                    </form>
                
                <!--<input class="button" type="button" name="signup" id="signup" value="Sign Up" width="50%"/>  -->
                <a href="../home-page/home.php" class="button-login" data-role="button" data-inline="true">Login</a>
                <!-- <button class="button">Login</button>            -->
                
                <hr>
                <br>
                <div align=center>
                <a href="https://www.google.com/"><img src="../assets/images/google.svg" alt="google" id="linkimg" hspace="5"></a>                      
                <a href="https://www.facebook.com/"><img src="../assets/images/facebook.svg" alt="facebook" id="linkimg" hspace="5"></a> 
                    <br>
                    <br>
                    <a href="#forgotpassword">Forgot your password?</a>
                    <p>Dont have an account? <a href="../signup/signup.php">Sign up</a> </p>  
                </div>            
            </div>
        </div>
    </div>           
    </body>
    

<?php include '../templates/footer.php'; ?>
</html>        
     