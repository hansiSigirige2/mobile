<?php
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
require_once('../assets/plugins/stripe-php/stripe-php/init.php');
\Stripe\Stripe::setApiKey('sk_test_OXCwF5UvnYeb5NmfSAHxCEfg00BAL9JCX8');

// Token is created using Stripe Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];
$charge = \Stripe\Charge::create([
    'amount' => 999,
    'currency' => 'usd',
    'description' => 'Example charge',
    'source' => $token,
]);
?>

<?php 
	session_start();
	include '../templates/header.php';
?>


<header>
    <link rel="stylesheet" href="payment.css">
</header>
<div class="ui-grid-solo btn-home-send">
<button id="home" class="btn-primary-charge2" onclick="window.location.href='../home-page/home.php';">Back to Home Page</button>
<div style="height: 22.5rem !important;"><img class="pretty-girl" src="../assets/images/favor.jpg"></div>
</div>


<?php include '../templates/footer.php'; ?>