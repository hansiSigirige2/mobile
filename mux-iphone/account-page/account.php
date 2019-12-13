<div data-role="page" id="home" class="page-full">

	<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
	<?php include '../templates/footer.php'; ?>
	<header>
	<link rel="stylesheet" href="../home-page/home.css">
		<link rel="stylesheet" href="../assets/styles/header.css">
		<script src="../assets/scripts/main.js"></script>
	</header>


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
                      
            </div>
        </div> 



</html>


