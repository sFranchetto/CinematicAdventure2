<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Checkout</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--===============================================================================================-->	
      <link rel="icon" type="image/png" href="/other/Images/LogoNew3.png"/>
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="/other/vendorLogin/bootstrap/css/bootstrap.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="/other/fontsLogin/font-awesome-4.7.0/css/font-awesome.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="/other/fontsLogin/iconic/css/material-design-iconic-font.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="/other/vendorLogin/animate/animate.css">
      <!--===============================================================================================-->	
      <link rel="stylesheet" type="text/css" href="/other/vendorLogin/css-hamburgers/hamburgers.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="/other/vendorLogin/animsition/css/animsition.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="/other/vendorLogin/select2/select2.min.css">
      <!--===============================================================================================-->	
      <link rel="stylesheet" type="text/css" href="/other/vendorLogin/daterangepicker/daterangepicker.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="/css/cssLogin/util.css">
      <link rel="stylesheet" type="text/css" href="/css/cssLogin/main.css">
      <!--===============================================================================================-->
   </head>


   
   <body>
      <div class="limiter">
         <div class="container-login100">
            <div class="wrap-login100" style=" padding-top: 30px; padding-bottom: 20px;">
               <form method="post" action="/OrdersController/checkOut" class="form-horizontal">
                  <span class="login100-form-title p-b-26">
                  <img src ="/other/Images/secure-checkout.png" style="width: 250px;">
                  </span>
                  <span class="login100-form-title p-b-48">
                  <img src ="/Logo.png" width="130" height="100">
                  </span>
				  
                  <div class="wrap-input100 validate-input" data-validate = "First Name">
                     <input class="input100" type="text" name="firstName">
                     <span class="focus-input100" data-placeholder="First Name"></span>
                  </div>
				  
				  <div class="wrap-input100 validate-input" data-validate = "Last Name">
                     <input class="input100" type="text" name="lastName">
                     <span class="focus-input100" data-placeholder="Last Name"></span>
                  </div>
				  
				  <div class="wrap-input100 validate-input" data-validate = "Address">
                     <input class="input100" type="text" name="address">
                     <span class="focus-input100" data-placeholder="Address"></span>
                  </div>
				  
				  <div class="wrap-input100 validate-input" data-validate = "Country">
					 <input class="input100" type="text" name="country">
                     <span class="focus-input100" data-placeholder="Country"></span>
                  </div>
				  
				  <div class="wrap-input100 validate-input" data-validate = "City">
                     <input class="input100" type="text" name="city">
                     <span class="focus-input100" data-placeholder="City"></span>
                  </div>
				  
				  <div class="wrap-input100 validate-input" data-validate = "Postal Code">
                     <input class="input100" type="text" name="postalCode">
                     <span class="focus-input100" data-placeholder="Postal Code"></span>
                  </div>
				  

				  
				  
                  <!--
                     <div class="container-login100-form-btn">
                     	<div class="wrap-login100-form-btn">
                     		<div class="login100-form-bgbtn"></div>
                     		<button class="login100-form-btn">
                     			Signup
                     		</button>
                     	</div>
                     </div>
                     -->
                  <div class="form-group">
                     <input style= "background-color: #007bff" class="login100-form-btn" type="submit" class="btn btn-default" name="action" value="Checkout" />
                  </div>
               </form>
               <div class="text-center p-t-50" style="padding-top: 15px;">
                  <p><span class="txt1">
                     Keep shopping?
                     </span>
                     <a class="txt2" href="/">
                     Click here
                     </a>
                  </p>
                  <p><span class="txt1">
                     Go back to cart?
                     </span>
                     <a class="txt2" href="/OrderDetailController/index">
                     Click here
                     </a>
                  </p>
               </div>
				<br>
					<p style="text-align:center">
						<img src="/other/Images/visaMaster.png" style="width: 90px;">
						<img src="/other/Images/interac.png" style="width: 65px;">
						<img src="/other/Images/Bitcoin.png" style="width: 65px;">
						<img src="/other/Images/PayPal.png" style="width: 80px;">			
						<img src="/other/Images/ios.png" style="width: 60px;">	
						<img src="/other/Images/android.png" style="width: 55px;">	
					</p>
					<p style="text-align:center">
						<img src="/other/Images/nortonSecured.png" style="width: 90px;">	
					</p>
            </div>
         </div>
      </div>
   
   
   
   
   
   

	
	
	
  <div id="dropDownSelect1"></div>
      <!--===============================================================================================-->
      <script src="/other/vendorLogin/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script src="/other/vendorLogin/animsition/js/animsition.min.js"></script>
      <!--===============================================================================================-->
      <script src="/other/vendorLogin/bootstrap/js/popper.js"></script>
      <script src="/other/vendorLogin/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="/other/vendorLogin/select2/select2.min.js"></script>
      <!--===============================================================================================-->
      <script src="/other/vendorLogin/daterangepicker/moment.min.js"></script>
      <script src="/other/vendorLogin/daterangepicker/daterangepicker.js"></script>
      <!--===============================================================================================-->
      <script src="/other/vendorLogin/countdowntime/countdowntime.js"></script>
      <!--===============================================================================================-->
      <script src="/js/jsLogin/main.js"></script>
   </body>
</html>












<div>
	<p> Order View </p>
	<form method="post" action="/OrdersController/checkOut" class="form-horizontal">
	<div class="form-group">
	<label for="firstName">firstName</label>
	<input type="text" class="form-control" name="firstName" id="firstName" />
	</div>
	<div class="form-group">
	<label for="lastName">lastName</label>
	<input type="text" class="form-control" name="lastName" id="lastName" />
	</div>
	<div class="form-group">
	<label for="address">address</label>
	<input type="text" class="form-control" name="address" id="address" />
	</div>
	<div class="form-group">
	<label for="city">city</label>
	<input type="text" class="form-control" name="city" id="city" />
	</div>
	<div class="form-group">
	<label for="postalCode">postalCode</label>
	<input type="text" class="form-control" name="postalCode" id="postalCode" />
	</div>
	<div class="form-group">
	<label for="country">country</label>
	<input type="text" class="form-control" name="country" id="country" />
	</div>
	
	<div class="form-group">
	<input type="submit" class="btn btn-default" name="action" value="Confirm" />
	</div>
</form>
	</div>