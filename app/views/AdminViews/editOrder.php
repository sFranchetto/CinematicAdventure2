<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Login</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--===============================================================================================-->	
      <link rel="icon" type="image/png" href="/other/Images/LogoNew3.png"/>
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="other/vendorLogin/bootstrap/css/bootstrap.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="other/fontsLogin/font-awesome-4.7.0/css/font-awesome.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="other/fontsLogin/iconic/css/material-design-iconic-font.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="other/vendorLogin/animate/animate.css">
      <!--===============================================================================================-->	
      <link rel="stylesheet" type="text/css" href="other/vendorLogin/css-hamburgers/hamburgers.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="other/vendorLogin/animsition/css/animsition.min.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="other/vendorLogin/select2/select2.min.css">
      <!--===============================================================================================-->	
      <link rel="stylesheet" type="text/css" href="other/vendorLogin/daterangepicker/daterangepicker.css">
      <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="/css/cssLogin/util.css">
      <link rel="stylesheet" type="text/css" href="/css/cssLogin/main.css">
      <!--===============================================================================================-->
   </head>
   <body>
      <div class="limiter">
         <div class="container-login100">
            <div class="wrap-login100">
               <span class="login100-form-title p-b-26">
               Welcome!
               </span>
               <span class="login100-form-title p-b-48">
               <img src ="/Logo.png" width="130" height="100">
               </span>
			   
			   
			   <form method="post" action="">
					<input type=hidden  value=<?php echo $data['order']->orders_Id; ?> name='orders_Id' />
					<div class="wrap-input100 validate-input">
					<input class="input100" type='text' placeholder='Edit order status' name="order"></input>
					<input style="background-color: #007bff" type="submit" class="login100-form-btn" name="action" value="Save Status"/>
					</div>
				</form>
			   
			   
			   
			   
			   
			   
               <div class="text-center p-t-50">
                  <p><span class="txt1">
                     Go back to orders?
                     </span>
                     <a class="txt2" href="/AdminController/viewOrders">
                     Click Here
                     </a>
                  </p>
                  <p><span class="txt1">
                     Go back to admin panel?
                     </span>
                     <a class="txt2" href="/AdminController">
                     Click here
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div id="dropDownSelect1"></div>
      <!--===============================================================================================-->
      <script src="other/vendorLogin/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script src="other/vendorLogin/animsition/js/animsition.min.js"></script>
      <!--===============================================================================================-->
      <script src="other/vendorLogin/bootstrap/js/popper.js"></script>
      <script src="other/vendorLogin/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="other/vendorLogin/select2/select2.min.js"></script>
      <!--===============================================================================================-->
      <script src="other/vendorLogin/daterangepicker/moment.min.js"></script>
      <script src="other/vendorLogin/daterangepicker/daterangepicker.js"></script>
      <!--===============================================================================================-->
      <script src="other/vendorLogin/countdowntime/countdowntime.js"></script>
      <!--===============================================================================================-->
      <script src="js/jsLogin/main.js"></script>
   </body>
</html>





<form method="post" action="">

<div class="form-group">
	<input type=hidden  value=<?php echo $data['order']->orders_Id; ?> name='orders_Id' />
	<input  type='text' placeholder='Edit order status' name="order"></input>
	<input type="submit" class="btn btn-default" name="action" value="Edit Status"/>
	</div>
</form>