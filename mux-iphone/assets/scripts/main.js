//arrange grid to orientation
$( window ).on( "orientationchange", function( event ) {
	if(window.innerHeight > window.innerWidth){
		$.ajax({
			url     : 'setOrientation.php',
			method  : 'POST',
			data    : {"orientation": "land"},
			success : function( response ) {
				window.location.reload();
				console.log("land");

			}
		});
	}
	if(window.innerWidth > window.innerHeight){
		$.ajax({
			url     : 'setOrientation.php',
			method  : 'POST',
			data    : {"orientation": "port"},
			success : function( response ) {
				window.location.reload();
				console.log("port");
			}
		});

	}
});


$(document).ready(function () {

	if(window.innerHeight > window.innerWidth){
		$.ajax({
			url     : 'setOrientation.php',
			method  : 'post',
			data    : {"orientation": "port"},
			success : function( response ) {
				console.log("port");

			}
		});

		toggleFavouritesPortrait();
		toggleOrdersPortrait();
	}

	if(window.innerWidth > window.innerHeight){
		$.ajax({
			url     : 'setOrientation.php',
			method  : 'post',
			data    : {"orientation": "land"},
			success : function( response ) {
				console.log("land");

			}
		});

		toggleFavouritesLandscape();
		toggleOrdersLandscape();
	}

	$('#share-button').on('tap', function () {
		$('#share-confirmation-modal').modal('hide');
	});

	$('#image-upload-link').on('tap', function() {
		$('#image-upload').click();
	});

	updateNavIcon();
	//handle rating
	handleRating();
	// resetFilter();


	$('.ais-SearchBox-submit').removeClass('ui-btn ui-shadow ui-corner-all');
	$('.ais-SearchBox-reset').removeClass('ui-btn ui-shadow ui-corner-all');
});

function loginNavigation() {
	console.log("in");
	window.location.replace("login.php");
}

function addToCart(prodId,qty){
	$.ajax({
		url     : 'add_to_cart.php',
		method  : 'post',
		data    : {'prodId': prodId, 'qty': qty},
		success : function( response ) {
			console.log("success");
		}
	});
}

function handleCommentRating(prodId, userId, userName,date) {

		var comment = $.trim($("#product-textarea").val());
		var rating = $("#star-val").val();
	 	if(comment == ""){
			$('#product-warning').text('Please add a comment');
		}
		else if(rating == 0){
			$('#product-warning').text('Please rate product');
		}
		else {

			$.ajax({
				url: './data/products.json',
				type: "GET",
				dataType: "json",
				success: function (data) {
					var indexI;
					var totalRating=0;
					var numOfFeedback=0;

					for(var i=0; i<lengthObj(data); i++){
						if(data[i]['prod_id'] == prodId){
							indexI = i;
							numOfFeedback= lengthObj(data[i]['feedback']);
							if(numOfFeedback != 0){
								for (var j=0; j<numOfFeedback; j++){
									totalRating = parseInt(totalRating) + parseInt(data[i]['feedback'][j]['rating']);
								}
							}

							break;
						}
					}

					var jsonData = {
						"user_id": userId,
						"comment": comment,
						"rating": rating,
						"date_time": date,
						"name": userName
					};

					data[indexI]['feedback'].push(jsonData);

					var temRating = (parseInt(totalRating)+parseInt(rating))/(numOfFeedback+1);
					data[indexI]['overall_rating'] = Math.round(temRating);

					$.ajax({
						url     : 'savejson.php',
						method  : 'post',
						data    : {'alldata': data},
						success : function( response ) {
							$("#comment-button").attr("data-dismiss","modal");
								window.location.reload();
						}
					});
				}
			});

		}

}

function toggleFavouritesPortrait() {
	$('.promo-line-long-land').addClass('promo-line-long').removeClass('promo-line-long-land');
	$('.card-title-land').addClass('card-title').removeClass('card-title-land');
	$('.card-text-land').addClass('.card-text').removeClass('card-text-land');
	$('.price-land').addClass('price').removeClass('price-land');
	$('.heart-long-land').addClass('heart-long').removeClass('heart-long-land');
	$('.select-all-label-land').addClass('select-all-label').removeClass('select-all-label-land');
}

function toggleFavouritesLandscape() {
	$('.promo-line-long').addClass('promo-line-long-land').removeClass('promo-line-long');
	$('.card-title').addClass('card-title-land').removeClass('card-title');
	$('.card-text').addClass('.card-text-land').removeClass('card-text');
	$('.price').addClass('price-land').removeClass('price');
	$('.heart-long').addClass('heart-long-land').removeClass('heart-long');
	$('.select-all-label').addClass('select-all-label-land').removeClass('select-all-label');
}

function toggleOrdersPortrait() {
	$('.card-title-land').addClass('card-title').removeClass('card-title-land');
	$('.card-text-land').addClass('.card-text').removeClass('card-text-land');
	$('.price-order-history-land').addClass('price-order-history').removeClass('price-order-history-land');
}

function toggleOrdersLandscape() {
	$('.card-title').addClass('card-title-land').removeClass('card-title');
	$('.card-text').addClass('.card-text-land').removeClass('card-text');
	$('.price-order-history').addClass('price-order-history-land').removeClass('price-order-history');
}

function resetFilter() {
	$('#reset_btn').on('tap', function () {

		$('#filter-form')[0].reset();

		$("#star-1").removeClass("fa-star");
		$("#star-2").removeClass("fa-star");
		$("#star-3").removeClass("fa-star");
		$("#star-4").removeClass("fa-star");
		$("#star-5").removeClass("fa-star");

		$("#star-1").addClass("fa-star-o");
		$("#star-2").addClass("fa-star-o");
		$("#star-3").addClass("fa-star-o");
		$("#star-4").addClass("fa-star-o");
		$("#star-5").addClass("fa-star-o");
	});
}

function handleRating() {
	$('#star-1').on('tap', function () {
		if($( "#star-1" ).hasClass( "fa-star-o" )){
			$("#star-1").removeClass("fa-star-o");
			$("#star-1").addClass("fa-star");

			$("#star-2").removeClass("fa-star");
			$("#star-3").removeClass("fa-star");
			$("#star-4").removeClass("fa-star");
			$("#star-5").removeClass("fa-star");

			$("#star-2").addClass("fa-star-o");
			$("#star-3").addClass("fa-star-o");
			$("#star-4").addClass("fa-star-o");
			$("#star-5").addClass("fa-star-o");

			$("#star-val").val("1");
		}

		else if($("#star-1").hasClass( "fa-star" )){
			$("#star-2").removeClass("fa-star");
			$("#star-3").removeClass("fa-star");
			$("#star-4").removeClass("fa-star");
			$("#star-5").removeClass("fa-star");

			$("#star-2").addClass("fa-star-o");
			$("#star-3").addClass("fa-star-o");
			$("#star-4").addClass("fa-star-o");
			$("#star-5").addClass("fa-star-o");
		}

	});

	$('#star-2').on('click', function () {
		if($( "#star-2" ).hasClass( "fa-star-o" )){
			$("#star-2").removeClass("fa-star-o");
			$("#star-2").addClass("fa-star");
			$("#star-1").removeClass("fa-star-o");
			$("#star-1").addClass("fa-star");

			$("#star-3").removeClass("fa-star");
			$("#star-4").removeClass("fa-star");
			$("#star-5").removeClass("fa-star");

			$("#star-3").addClass("fa-star-o");
			$("#star-4").addClass("fa-star-o");
			$("#star-5").addClass("fa-star-o");

			$("#star-val").val("2");
		}
		else if($( "#star-2" ).hasClass( "fa-star" )){
			$("#star-3").removeClass("fa-star");
			$("#star-4").removeClass("fa-star");
			$("#star-5").removeClass("fa-star");

			$("#star-3").addClass("fa-star-o");
			$("#star-4").addClass("fa-star-o");
			$("#star-5").addClass("fa-star-o");
		}
	});

	$('#star-3').on('click', function () {
		if($( "#star-3" ).hasClass( "fa-star-o" )){
			$("#star-3").removeClass("fa-star-o");
			$("#star-3").addClass("fa-star");
			$("#star-2").removeClass("fa-star-o");
			$("#star-2").addClass("fa-star");
			$("#star-1").removeClass("fa-star-o");
			$("#star-1").addClass("fa-star");

			$("#star-4").removeClass("fa-star");
			$("#star-5").removeClass("fa-star");

			$("#star-4").addClass("fa-star-o");
			$("#star-5").addClass("fa-star-o");

			$("#star-val").val("3");
		}
		else if($( "#star-3" ).hasClass( "fa-star" )){
			$("#star-4").removeClass("fa-star");
			$("#star-5").removeClass("fa-star");

			$("#star-4").addClass("fa-star-o");
			$("#star-5").addClass("fa-star-o");
		}
	});

	$('#star-4').on('click', function () {
		if($( "#star-4" ).hasClass( "fa-star-o" )){
			$("#star-4").removeClass("fa-star-o");
			$("#star-4").addClass("fa-star");
			$("#star-3").removeClass("fa-star-o");
			$("#star-3").addClass("fa-star");
			$("#star-2").removeClass("fa-star-o");
			$("#star-2").addClass("fa-star");
			$("#star-1").removeClass("fa-star-o");
			$("#star-1").addClass("fa-star");

			$("#star-5").removeClass("fa-star");
			$("#star-5").addClass("fa-star-o");

			$("#star-val").val("4");
		}
		else if($( "#star-4" ).hasClass( "fa-star" )){
			$("#star-5").removeClass("fa-star");
			$("#star-5").addClass("fa-star-o");
		}
	});

	$('#star-5').on('click', function () {
		if($( "#star-5" ).hasClass( "fa-star-o" )){
			$("#star-5").removeClass("fa-star-o");
			$("#star-5").addClass("fa-star");
			$("#star-4").removeClass("fa-star-o");
			$("#star-4").addClass("fa-star");
			$("#star-3").removeClass("fa-star-o");
			$("#star-3").addClass("fa-star");
			$("#star-2").removeClass("fa-star-o");
			$("#star-2").addClass("fa-star");
			$("#star-1").removeClass("fa-star-o");
			$("#star-1").addClass("fa-star");

			$("#star-val").val("5");
		}

	});

}



//get length of javascript object
function lengthObj(obj) {
	return Object.keys(obj).length;
}

//toggle favourite items
function toggleFavourite(prodId, userId, unfavouriteOnly) {
	console.log( prodId );
	$.ajax({
		url: './data/products.json',
		type: "GET",
		dataType: "json",
		success: function (data) {
			var isInArray = false;
			var indexI = null;
			var indexJ = null;

			for(var i=0; i<lengthObj(data); i++){
				if(data[i]['prod_id'] == prodId){
					indexI = i;
					for(var j=0; j<data[i]['favourited_by'].length; j++) {
						if (data[i]['favourited_by'][j] == userId) {
							isInArray = true;
							indexJ = j;
						}
					}
				}
			}
			if(isInArray){
				data[indexI]['favourited_by'][indexJ] = null;
				var element = document.getElementById('heart-' + prodId);
				element.classList.remove("fa-heart");
				element.classList.add("fa-heart-o");
			}
			else {
				data[indexI]['favourited_by'].push(userId);
				var element = document.getElementById('heart-' + prodId);
				element.classList.remove("fa-heart-o");
				element.classList.add("fa-heart");
			}

			$.ajax({
				url     : 'savejson.php',
				method  : 'post',
				data    : {'alldata': data},
				success : function( response ) {
					console.log( response );
					if (unfavouriteOnly) {
						window.location.reload();
					}
				}
			});
		}
	});
}

function updateNavIcon() {
	let currentUrl = window.location.href;
	if (currentUrl.indexOf('index.php') >= 0) {
		$("#home-icon").attr("src", "assets/images/home-filled.png");
		$("#cart-icon").attr("src", "assets/images/cart.png");
		$("#promo-icon").attr("src", "assets/images/promo.png");
		$("#game-icon").attr("src", "assets/images/game.png");
		$("#account-icon").attr("src", "assets/images/account.png");
	} else if (currentUrl.indexOf('cart.php') >= 0) {
		$("#home-icon").attr("src", "assets/images/home.png");
		$("#cart-icon").attr("src", "assets/images/cart-filled.png");
		$("#promo-icon").attr("src", "assets/images/promo.png");
		$("#game-icon").attr("src", "assets/images/game.png");
		$("#account-icon").attr("src", "assets/images/account.png");
	} else if (currentUrl.indexOf('promos.php') >= 0) {
		$("#home-icon").attr("src", "assets/images/home.png");
		$("#cart-icon").attr("src", "assets/images/cart.png");
		$("#promo-icon").attr("src", "assets/images/promo-filled.png");
		$("#game-icon").attr("src", "assets/images/game.png");
		$("#account-icon").attr("src", "assets/images/account.png");
	} else if (currentUrl.indexOf('game.php') >= 0) {
		$("#home-icon").attr("src", "assets/images/home.png");
		$("#cart-icon").attr("src", "assets/images/cart.png");
		$("#promo-icon").attr("src", "assets/images/promo.png");
		$("#game-icon").attr("src", "assets/images/game-filled.png");
		$("#account-icon").attr("src", "assets/images/account.png");
	} else if (currentUrl.indexOf('account.php') >= 0) {
		$("#home-icon").attr("src", "assets/images/home.png");
		$("#cart-icon").attr("src", "assets/images/cart.png");
		$("#promo-icon").attr("src", "assets/images/promo.png");
		$("#game-icon").attr("src", "assets/images/game.png");
		$("#account-icon").attr("src", "assets/images/account-filled.png");
	}
}

function validateRegisterForm() {
	var password = document.forms["register"]["password"].value;
	var password_confirm = document.forms["register"]["confirm"].value;
	var mobile = document.forms["register"]["mobile"].value;

	if ($('#terms').is(":checked")) {
		if (password != password_confirm) {
			$("#register-alerts").html("Error: Passwords do not match!");
			$("#register-alerts").addClass("show warning");
			setTimeout(function () {
				$("#register-alerts").removeClass("show warning")
			}, 10000);
			return false;
		} else if (mobile.length != 10) {
			$("#register-alerts").html("Error: Invalid Mobile Number!");
			$("#register-alerts").addClass("show warning");
			setTimeout(function () {
				$("#register-alerts").removeClass("show warning")
			}, 10000);
			return false;
		}
	} else {
		$("#register-alerts").html("Error: Please agree to the Terms and Conditions!");
		$("#register-alerts").addClass("show warning");
		setTimeout(function () {
			$("#register-alerts").removeClass("show warning")
		}, 10000);
		return false;
	}
}

function changeImage() {
	document.getElementById('image-upload-link').src = document.getElementById('image-upload').files[0].path;
}


