<div data-role="page" id="home" class="page-full" style="background-color: white;">

	<?php 
        session_start();
        $_SESSION['page-type']= 'account-details';
	?>
	<?php include '../templates/header.php'; ?>
	
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
    <div id="collapsible-btn">
    <button type="button" id="collapsible-btn-content" class="collapsible" onclick="changeImage();">
        My Details 
        <img src="../assets/images/expandbtn.svg" id="collapse-icon" alt="expand" width="5%" align="right">
    </button>
        <div class="content">
        <form align=left action="handler.php" method="post" >
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="" placeholder="" />
            <label for="mobile">Mobile Number</label>
            <input type="text" name="mobile" id="mobile" value="" placeholder="" />
                <div align=center>
                    <button id="button2" data-inline="true" class="button2" onclick="openPopup()">Change Password</button>      
                    <button id="button1" data-inline="true" class="button1">Submit</button> 
                </div>

        </form>
    </div>
    </div>
    

    <div id="collapsible-btn">
        <button type="button" id="collapsible-btn-content" class="collapsible" onclick="changeImage();">
            Loyalty Points
            <img src="../assets/images/expandbtn.svg" id="collapse-icon" alt="expand" width="5%" align="right">
        </button>
        <div class="content">
            <div align=center >
                    <br>
                    <img src="../assets/images/gold tier.svg" alt="expand" width="15%" align=right >
                    <img src="../assets/images/silver tier.svg" alt="expand" width="15%" align=left><br>
                    <img src="../assets/images/bar50.svg" alt="expand" width="60%" align=center >
                    <?php 
                    $user_file = file_get_contents('../data/users.json');
                    $user_array = json_decode($user_file, true);
                    echo '<br><br><br><p>Total Loyalty Points:'.$user_array[0]['loyalty_points'].'<br></p>';
                    ?>
                    
            </div>        
        </div>   
    </div>

<div class="modal"  id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <label for="oldpassword">Old Password</label>
        <input type="password" name="oldpassword" id="oldpassword" value="" placeholder="" />
        <label for="newpassword">New Password</label>
        <input type="password" name="newpassword" id="newpassword" value="" placeholder="" />
        <label for="confirmpassword">Confirm Password</label>
        <input type="password" name="confirmpassword" id="confirmpassword" value="" placeholder="" />
        <div class="ui-grid-a" style="text-align: center">          
        </div>
      </div>
      <div class="modal-footer">
            <button id="button3"  data-dismiss="modal">CHANGE PASSWORD</button>
      </div>
    </div>
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

        function openPopup(){
            $("#myModal").modal();
        }

        // function changeImage(){
        //     var img = document.getElementById("collapse-icon");
        //     img.src="../assets/images/collapsebtn.svg";
        //     return false;
        // }

        function changeImage() {
            var image = document.getElementById('collapse-icon');
            if (image.src.match("../assets/images/expandbtn.svg")) {
                image.src = "../assets/images/collapsebtn.svg";
            }
            else {
                image.src = "../assets/images/expandbtn.svg";
            }
        }

    </script>
</body>

<?php include '../templates/footer.php'; ?>
</html>
</div>
