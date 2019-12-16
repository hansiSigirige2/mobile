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

echo '<script>window.location.replace("../home-page/home.php");</script>';

?>



