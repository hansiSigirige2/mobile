function sendEmail() {

	let favouriteList = localStorage.getItem("favouriteList");
	favouriteList = (favouriteList) ? JSON.parse(favouriteList) : []

	var favContent = '';
	favouriteList.map(x => {
		favContent += "Name:" + x.productName + ", " + x.productPrice + ", " + x.discountedPrice + " || "
	})

	console.log(favContent)

	Email.send({
		Host: "smtp.gmail.com",
		Username : "<sender’s email address>",
		Password : "<email password>",
		To : '<recipient’s email address>',
		From : "<sender’s email address>",
		Subject : "<email subject>",
		Body : favContent,
	}).then(
		message => alert("mail sent successfully")
	);
}
