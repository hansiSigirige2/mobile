function sendEmail() {

	let favouriteList = localStorage.getItem("favouriteList");
	favouriteList = (favouriteList) ? JSON.parse(favouriteList) : []

	var favContent = '';
	favouriteList.map(x => {
		favContent += "Name:" + x.productName + ". Price: " +  x.productPrice + ". Discounted Price: " + x.discountedPrice + "           "
	})

	console.log(favContent)

	Email.send({
		Host: "smtp.gmail.com",
		Username : "testzupermart@gmail.com",
		Password : "Test@1234",
		To : 'namila.2016046@iit.ac.lk',
		From : "testzupermart@gmail.com",
		Subject : "Favourites List",
		Body : favContent,
	}).then(
		message => alert("mail sent successfully")
	);
}
