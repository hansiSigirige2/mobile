<div data-role="page" id="home" class="page-full" style="background-color: white;">

	<?php 
        session_start();
        $_SESSION['page-type']= 'account-details';
	?>
	<?php include '../templates/header.php'; ?>
	
	<header>
	    <link rel="stylesheet" href="../faq/faq.css">
	    <link rel="stylesheet" href="../assets/styles/header.css">
	    <script src="../assets/scripts/main.js"></script>
	</header>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>FAQ</h2>
    <div id="collapsible-btn">
        <button type="button" id="collapsible-btn-content" class="collapsible" onclick="changeImage();">
        How Can I Order?
        <img src="../assets/images/expandbtn.svg" id="collapse-icon" alt="expand" width="5%" align="right">
        </button>
        <div class="content">
            <p id="faqtext">You can order easily using our online platform. When you find a product you need, you can add it to the cart,
            login and go through the ordering process. After the order is ready, you will receive orders summary to your email. Order
            summary will also be stored in your account.</p>
        </div>
    </div>
    
    <div id="collapsible-btn">
        <button type="button" id="collapsible-btn-content" class="collapsible" onclick="changeImage();">
        Can I cancel my order? 
        <img src="../assets/images/expandbtn.svg" id="collapse-icon" alt="expand" width="5%" align="right">
        </button>
        <div class="content">
            <p id="faqtext">It is is possible through the website itself.</p>
        </div>
    </div>

    <div id="collapsible-btn">
        <button type="button" id="collapsible-btn-content" class="collapsible" onclick="changeImage();">
        Can I return a product? 
        <img src="../assets/images/expandbtn.svg" id="collapse-icon" alt="expand" width="5%" align="right">
        </button>
        <div class="content">
            <p id="faqtext"> It is possible to return a product within 2 weeks of the purchase date.</p>
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
