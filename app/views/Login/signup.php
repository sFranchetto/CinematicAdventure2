<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Login</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--===============================================================================================-->	
      <link rel="icon" type="image/png" href="other/Images/LogoNew3.png"/>
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
               <form method="post" action="/LoginController/signup" class="form-horizontal">
                  <span class="login100-form-title p-b-26">
                  Welcome!
                  </span>
                  <span class="login100-form-title p-b-48">
                  <img src ="/Logo.png" width="130" height="100">
                  </span>	
                  <div class="wrap-input100 validate-input" data-validate = "Enter Username">
                     <input class="input100" type="text" name="username">
                     <span class="focus-input100" data-placeholder="Username"></span>
                  </div>
                  <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                     <input class="input100" type="text" name="email">
                     <span class="focus-input100" data-placeholder="Email"></span>
                  </div>
                  <div class="wrap-input100 validate-input" data-validate="Enter password">
                     <span class="btn-show-pass">
                     <i class="zmdi zmdi-eye"></i>
                     </span>
                     <input class="input100" type="password" name="password">
                     <span class="focus-input100" data-placeholder="Password"></span>
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
                     <input style= "background-color: #007bff" class="login100-form-btn" type="submit" class="btn btn-default" name="action" value="Register" />
                  </div>
               </form>
               <div class="text-center p-t-50">
                  <p><span class="txt1">
                     Already have an account?
                     </span>
                     <a class="txt2" href="LoginController/index">
                     Log in
                     </a>
                  </p>
                  <p><span class="txt1">
                     Go back to main page?
                     </span>
                     <a class="txt2" href="/">
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
<!--
<html>
   <head>
      <title> Signup </title>
   </head>
   <body>
      <p> Singup View </p>
      <form method="post" action="/LoginController/signup" class="form-horizontal">
         <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" name="username" id="username" />
         </div>
         <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" id="password" />
         </div>
         <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" />
         </div>
         <div class="form-group">
            <input type="submit" class="btn btn-default" name="action" value="Register" />
         </div>
      </form>
   </body>
   -->