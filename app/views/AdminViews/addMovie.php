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
               <form method="post" action="/AdminController/insertNewMovie" class="form-horizontal"  enctype="multipart/form-data">
					  <span class="login100-form-title p-b-26">
					  Add a Movie
					  </span>
					  <span class="login100-form-title p-b-48">
					  <img src ="/Logo.png" width="130" height="100">
					  </span>	
						  <div class="wrap-input100 validate-input" data-validate = "Please enter a movie title">
							 <input class="input100" type="text" name="title" id="title">
							 <span class="focus-input100" data-placeholder="Movie Title"></span>
						  </div>
						  <div class="wrap-input100 validate-input" data-validate = "Please enter the movie director">
							 <input class="input100" type="text" name="director" id="director">
							 <span class="focus-input100" data-placeholder="Director"></span>
						  </div>
						  <div class="wrap-input100 validate-input" data-validate = "Please enter the movie genre">
							 <input class="input100" type="text" name="genre" id="genre">
							 <span class="focus-input100" data-placeholder="Genre"></span>
						  </div>
						  
						  <div class="wrap-input100 validate-input" data-validate = "Please enter the movie price">
							 <input class="input100" type="text" name="price" id="price">
							 <span class="focus-input100" data-placeholder="Price"></span>
						  </div>
						  
						  <div class="wrap-input100 validate-input" data-validate = "Please enter a description of the movie">
							 <input class="input100" type="text" name="description" id="description">
							 <span class="focus-input100" data-placeholder="Description"></span>
						  </div>

                    <div class="wrap-input100 validate-input" data-validate = "Please enter the movie trailer">
                      <input class="input100" type="text" name="trailer" id="trailer">
                      <span class="focus-input100" data-placeholder="Movie Trailer"></span>
                    </div>

						  
						  <div class="wrap-input100 validate-input" data-validate = "Please select a release date of the movie">
							 <input class="input100" type="date" name="release_date" id="release_date">
							 <span class="focus-input100" data-placeholder="Release Date"></span>
						  </div>

                    <div class="wrap-input100 validate-input">
                        <input type="file" name="image_path" id="image_path">
                    </div>
						  
						  <div class="form-group">
							 <input style= "background-color: #007bff" class="login100-form-btn" type="submit" class="btn btn-default" name="action" value="Confirm" />
						  </div>
               </form>
               <div class="text-center p-t-50">
                  <p><span class="txt1">
                     Go back to Movie Listing?
                     </span>
                     <a class="txt2" href="/adminController/addMovie">
                     Click here
                     </a>
                  </p>
				   <p><span class="txt1">
                     Go back to main page?
                     </span>
                     <a class="txt2" href="/">
                     Click here
                     </a>
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