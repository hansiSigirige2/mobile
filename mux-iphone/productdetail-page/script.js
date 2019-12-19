loadCommentList();

// ========================================

function onFavClick() {
    let favouriteList = localStorage.getItem("favouriteList");
    favouriteList = (favouriteList) ? JSON.parse(favouriteList) : []

    var img = document.getElementById("favdeals3");
    const imageURL = img.src;

    const productName = $("#product-name").text();
    const productPrice = $("#product-price").text();
    const discountedPrice = $("#product-discount-price").text();

    var productImage = document.getElementById("product-image");
    const productImageUrl = productImage.src;

    if (imageURL.includes("heart.svg")) {
        img.src = "./heart (selected).png";
        const item = {
            productName: productName,
            productPrice: productPrice,
            discountedPrice: discountedPrice,
            productImageUrl: productImageUrl
        }
        favouriteList.push(item)
    } else {
        img.src = "../assets/images/heart.svg";
        favouriteList = favouriteList.filter(x => x.productName != productName);
    }

    favouriteList = JSON.stringify(favouriteList);
    localStorage.setItem("favouriteList", favouriteList)
}

// ========================================

function onAddComment() {
    var comment = document.getElementById("commentTextarea").value;

    if (comment == "") {
        alert("Comment can not be empty!");
        return;
    }

    let commentList = localStorage.getItem("commentList");
    commentList = (commentList) ? JSON.parse(commentList) : []
    commentList.push(comment)
    localStorage.setItem("commentList", JSON.stringify(commentList))
    document.getElementById("commentTextarea").value = ""

    loadCommentList();
}

function loadCommentList() {
    let commentList = localStorage.getItem("commentList");
    commentList = (commentList) ? JSON.parse(commentList) : []
    console.log(commentList)

    let outputHtml = ``;
    commentList.map(x => {
        outputHtml += `
            <div> 
                <p>${x}</p>
            </div>
        `
    })
    $("#commentList").html(outputHtml);
}


// ========================================

var count = 1;
var countEl = document.getElementById("quantity");


function plus() {
    count++;
    countEl.value = count;
    document.getElementById("hiddenCount").value = countEl.value;
}

function minus() {
    if (count > 1) {
        count--;
        countEl.value = count;
        document.getElementById("hiddenCount").value = countEl.value;
    }
}

// ========================================


$(document).ready(function() {

    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function() {
        var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

        // Now highlight all the stars that's not after the current hovered star
        $(this).parent().children('li.star').each(function(e) {
            if (e < onStar) {
                $(this).addClass('hover');
            } else {
                $(this).removeClass('hover');
            }
        });

    }).on('mouseout', function() {
        $(this).parent().children('li.star').each(function(e) {
            $(this).removeClass('hover');
        });
    });


    /* 2. Action to perform on click */
    $('#stars li').on('click', function() {
        var onStar = parseInt($(this).data('value'), 10); // The star currently selected
        var stars = $(this).parent().children('li.star');

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
        }

        // JUST RESPONSE (Not needed)
        var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
        var msg = "";
        if (ratingValue > 1) {
            msg = "Thanks! You rated this " + ratingValue + " stars.";
        } else {
            msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
        }
        responseMessage(msg);

    });


});


function responseMessage(msg) {
    $('.success-box').fadeIn(200);
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
}