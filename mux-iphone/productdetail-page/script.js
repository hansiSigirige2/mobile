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
        img.src = "heart (selected).png";
        const item = {
            productName: productName,
            productPrice: productPrice,
            discountedPrice: discountedPrice,
            productImageUrl: productImageUrl
        }
        favouriteList.push(item)
    } else {
        img.src = "heart.svg";
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