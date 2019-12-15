<html>

<head> 
  <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
  <form class="thin" action="charge.php" method="post" id="payment-form">
    <div class="form-row">
      <label for="card-element">
        Credit or debit card
      </label>
      <div id="card-element">
        <!-- A Stripe Element will be inserted here. -->
      </div>
  
      <!-- Used to display Element errors. -->
      <div id="card-errors" role="alert"></div>
    </div>
  
    <button>Submit Payment</button>
  </form>
</body>


<script src="../assets/scripts/stripe.js"></script>

</html>