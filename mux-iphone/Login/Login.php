
<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
	<header>
	<link rel="stylesheet" href="../home-page/home.css">
		<link rel="stylesheet" href="../assets/styles/header.css">
		<script src="../assets/scripts/main.js"></script>
	</header>


<!DOCTYPE html>
<html>
    <!--<style>
    button {background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;}
    </style>-->
    <head>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href ="signup.css">
        <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <!--<link rel = "stylesheet" href = "sample.css">-->
        
        <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head> 
    <body>
        <br><br><br>
        <div class="ui-grid-b">
            <div class="ui-block-a">    
            </div>
            <div class="ui-block-b">
                <h1 align=center> Login </h1>
                <br>
                <form action="handler.php" method="post">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="" placeholder="" />
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" value="" placeholder="" />
                    </form>
                <br>
                <!--<input class="button" type="button" name="signup" id="signup" value="Sign Up" width="50%"/>  -->
                <button class="button" style=>Login</button>           
                <br><br>
                <hr>
                <br>
                <div align=center>
                    <img src="F:\IIT\UIUX\CW\UX Stuff\Icons\google.svg" alt="google" width="10%" height="10%" hspace="20">                      
                    <img src="F:\IIT\UIUX\CW\UX Stuff\Icons\facebook.svg" alt="facebook" width="10%" height="10%" hspace="20">
                    <br>
                    <br>
                    <a href="#forgotpassword">Forgot your password?</a>
                    <p>Dont have an account? <a href="#signup">Sign up</a> </p>  
                </div>            
            </div>
        </div>       
    </body>
</html>        
     