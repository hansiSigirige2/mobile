//arrange grid to orientation
$(window).on("orientationchange", function(event) {
    if (window.innerHeight > window.innerWidth) {
        $.ajax({
            url: '../setOrientation.php',
            method: 'POST',
            data: { "orientation": "land" },
            success: function(response) {
                window.location.reload();
                console.log("land");

            }
        });
    }
    if (window.innerWidth > window.innerHeight) {
        $.ajax({
            url: '../setOrientation.php',
            method: 'POST',
            data: { "orientation": "port" },
            success: function(response) {
                window.location.reload();
                console.log("port");
            }
        });

    }
});

function navMenu() {
    $("#menucon").toggleClass("hide-menu");
}

function getRedeem() {
    var redeemPrice = $("#redeem").val();
    $("#redeemVal").html(redeemPrice);
    getTotal();
}

function getDelivery(delivery) {
    if (delivery == "express") {
        $("#deliveryVal").html(300);
    } else {
        $("#deliveryVal").html(0);
    }
    getTotal();
    $('#paymentproceed').removeAttr("disabled");
}



function getTotal() {
    var redeemPrice = parseInt($("#redeemVal").text());
    var subtotal = parseInt($("#subtotalVal").text());
    var delivery = parseInt($("#deliveryVal").text());
    var discount = parseInt($("#discountVal").text());
    var total = subtotal - (discount + redeemPrice) + delivery;
    $("#totalVal").html(total);
}

function search() {

}


function getcategory(){
	var categoryname=$("#categoryname").text();
	alert(categoryname);
	$.ajax({
		url     : '../setCategory.php',
		method  : 'POST',
		data    : {"categoryname": categoryname},
		success : function( response ) {
			window.location.replace('../catalog/catalog.php');
			console.log("cat");

        }
    });
    getProductName(categoryname);
}

function getProductName(categoryname) {
    alert(categoryname);
    $("#productcat").html(categoryname);
}

function loginNavigation() {
    console.log("in");
    window.location.replace("login.php");
}

//get length of javascript object
function lengthObj(obj) {
    return Object.keys(obj).length;
}

$(document).ready(function() {

    if (window.innerHeight > window.innerWidth) {
        $.ajax({
            url: '../setOrientation.php',
            method: 'post',
            data: { "orientation": "port" },
            success: function(response) {
                console.log("port");

            }
        });


    }

    if (window.innerWidth > window.innerHeight) {
        $.ajax({
            url: '../setOrientation.php',
            method: 'post',
            data: { "orientation": "land" },
            success: function(response) {
                console.log("land");

            }
        });


    }
});