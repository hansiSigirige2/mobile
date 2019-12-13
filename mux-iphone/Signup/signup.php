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
<!--     <style>
    body {
        background-image: url('../assets/images/signupbk.jpg');
        
        }
    </style> -->
    <?php include '../templates/header.php'; ?>
    <head>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href ="signup.css">
        <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <!--<link rel = "stylesheet" href = "sample.css">-->
        
        <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head> 
    <body>
    <div style="background-image: url('../assets/images/signupbk.jpg'); background-size: 120% 120%;">
        <br><br><br>
        <div class="ui-grid-b">
            <div class="ui-block-a">    
            </div>
            <div class="ui-block-b" style="background-color: #ffffff">
                <h1 align=center> Sign Up</h1>
                <br>
                <form action="handler.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="" placeholder="" width="10px" />
                    <label for="number">Mobile Number</label>
                    <input type="text" name="number" id="number" value="" placeholder="" />
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="" placeholder="" />
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" value="" placeholder="" />
                    <label for="conpassword">Confirm Password</label>
                    <input type="text" name="conpassword" id="conpassword" value="" placeholder="" />
                </form>
                <br>
                <!--<input class="button" type="button" name="signup" id="signup" value="Sign Up" width="50%"/>  -->
                <button class="button">Sign Up</button>           
                <br><br>
                <hr>
                <br>
                <div align=center>
                    <img src="../assets/images/google.svg" alt="google" width="20%" hspace="5">                      
                    <img src="../assets/images/facebook.svg" alt="facebook" width="20%" hspace="5">
                    <br>
                    <br>
                    <p>Already have an account? <a href="#login">Login</a> </p>  
                </div>            
            </div>
        </div> 
    </div>      
    </body>
</html>        
     