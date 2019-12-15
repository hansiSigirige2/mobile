<div data-role="page" id="home" class="page-full">

	<?php 
		session_start();
	?>
	<?php include '../templates/header.php'; ?>
	<?php include '../templates/footer.php'; ?>
	<header>
	    <link rel="stylesheet" href="../account-details/details.css">
	    <link rel="stylesheet" href="../assets/styles/header.css">
	    <script src="../assets/scripts/main.js"></script>
	</header>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>Account Details</h2>
    
    <button type="image" class="collapsible">
        My Details 
        <img src="../assets/images/expandbtn.svg" alt="expand" width="5%" align="right">
    </button>
        <div class="content">
        <form align=left action="handler.php" method="post" >
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="" placeholder="" />
            <label for="mobile">Mobile Number</label>
            <input type="text" name="mobile" id="mobile" value="" placeholder="" />
                <div align=center>
                    <button id="change" data-inline="true" class="button2">Change Password</button> 
                    <button id="submit" data-inline="true" class="button1">Submit</button> 
                </div>
        </form>
    </div>
        <button type="button" class="collapsible">
            Loyalty Points
            <img src="../assets/images/expandbtn.svg" alt="expand" width="5%" align="right">
        </button>
        <div class="content">
            <div align=center >
                    <br>
                    <img src="../assets/images/gold tier.svg" alt="expand" width="15%" align=left >
                    <img src="../assets/images/silver tier.svg" alt="expand" width="15%" align=right><br>
                    <img src="../assets/images/bar50.svg" alt="expand" width="60%" align=center >
                    <br><br><br><p>Total Loyalty Points: 2500 <br>
                        Redeemable Points: 1500
                    </p>
            </div>        
        </div>     
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                    }
                    });
                }
    </script>
</body>
</html>
</div>
