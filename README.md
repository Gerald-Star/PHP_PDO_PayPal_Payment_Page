## PDO error mode -search on Google on PHP documentation

Youtube _ How to Create a PDO instance and set the error mode

https://www.php.net/manual/en/pdo.error-handling.php


Fetch Modes in PHP
https://www.php.net/manual/en/pdo.constants.fetch-modes.php





 <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container" style="margin-top: none">
      <a class="navbar-brand  text-white" href="#">Pay Page</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
        <div class="card">
          <img height="213px" class="card-img-top" src="images/node.png">
          <div class="card-body">
            <h5 class="d-inline"><b>Node Basics</b> </h5>
            <h5 class="d-inline">
              <div class="text-muted d-inline">($10/item)</div>
            </h5>
            <p>Monotonectally enable customized
              growth strategies and 24/7 portals. functional opportunities. </p>
            <a href="#" class="btn btn-primary w-100 rounded my-2"> Pay Now <i class="fas fa-arrow-right"></i> </a>

          </div>
        </div>
      </div>
      <br>
      <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-5">
        <div class="card">
          <a href="http://localhost/bookstore/shopping/single.php"><img height="213px" class="card-img-top"
              src="images/django.png"></a>
          <div class="card-body">
            <h5 class="d-inline"><b>Django Basics</b> </h5>
            <h5 class="d-inline">
              <div class="text-muted d-inline">($20/item)</div>
            </h5>
            <p>Monotonectally enable customized
              growth strategies and 24/7 portals. functional opportunities. </p>
            <a href="#" class="btn btn-primary w-100 rounded my-2"> Pay Now <i class="fas fa-arrow-right"></i> </a>
          </div>
        </div>
      </div>
      <br>
      <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
        <div class="card">
          <img height="213px" class="card-img-top" src="images/html5.jpg">
          <div class="card-body">
            <h5 class="d-inline"><b>Django Basics</b> </h5>
            <h5 class="d-inline">
              <div class="text-muted d-inline">($50/item)</div>
            </h5>
            <p>Monotonectally enable customized
              growth strategies and 24/7 portals. functional opportunities. </p>
            <a href="#" class="btn btn-primary w-100 rounded my-2"> Pay Now <i class="fas fa-arrow-right"></i> </a>
          </div>
        </div>
      </div>

    </div>

  </div>


AdDzposKwjgDGaJHVfK9hdiZD5k4fv4hYuBWEHpc3zRiUETaE0OrMf15GjJ9mj3bq1uR8devk1vt5dBy


## Integrate PayPal Checkout

https://developer.paypal.com/studio/checkout/standard/integrate


Before beginning your integration, you need to set up your development environment. You can refer to this flow diagram, and watch a video demonstrating how to integrate PayPal Checkout.

Start your integration by grabbing the sample code from PayPal’s GitHub repo, or visiting the PayPal GitHub Codespace. Read the Codespaces guide for more information. You can also use Postman to explore and test PayPal APIs. Read the Postman Guide for more information.


Download sample code

Open in Codespaces

Run in Postman

1. Integrate front end CLIENT
Set up your front end to integrate checkout payments.

Front-end process
Your app shows the PayPal checkout buttons.
Your app calls server endpoints to create the order and capture payment.

Front-end code
This example uses a index.html file to show how to set up the front end to integrate payments.

The /src/index.html and /src/app.js files handle the client-side logic and define how the PayPal front-end components connect with the back end. Use these files to set up the PayPal checkout using the JavaScript SDK and handle the payer's interactions with the PayPal checkout button.

You'll need to:

Save the index.html file in a folder named /src.
Save the app.js file in a folder named /src.
Step 1. Add the script tag
Include the <script> tag on any page that shows the PayPal buttons. This script will fetch all the necessary JavaScript to access the buttons on the window object.


Step 2. Configure your script parameters
The snippet in Step 1. Add the script tag shows that you need to pass a client-id and specify which components you want to use. The SDK offers Buttons, Marks, Card Fields, and other components. This sample focuses on the buttons component.

In addition to passing the client-id and specifying which components you want to use, you can also pass the currency you want to use for pricing. For this exercise, we'll use USD.

Buyer Country and Currency are only for use in sandbox testing. These are not to be used in production.