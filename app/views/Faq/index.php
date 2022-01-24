<!DOCTYPE html>
<html lang="en">

  <head>
  
	<link rel="icon" type="image/png" href="/other/Images/LogoNew3.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cinematic Adventures 2</title>

    <!-- Bootstrap core CSS -->
    <link href="/other/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/css/shop-homepage.css" rel="stylesheet">
	
	<link href="/css/css/BackToTop.css" rel="stylesheet">
	<script src="/js/js/BackToTop.js"></script>

  </head>

  <body>
  
  <button onclick="topFunction()" id="BackToTop" title="Go to top">Top</button>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">  
			<img class="d-block img-fluid" src="/other/Images/LogoNew3.png">
		</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
		  <?php
						if(LoginCore::isLoggedIn() == NULL){
							echo '<li><p> </p></li>';
						}elseif($_SESSION['username'] == 'Admin' || $_SESSION['username'] == 'admin'){
							echo '<li 	class="nav-item">
										<a class="nav-link" href="/AdminController">Admin Controller</a>
								  </li>';
						}
					?>
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.html">About</a>
            </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/LoginController/myAccount">Account</a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="/FaqController/showAllFaqs">FAQ</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/WishListController/index">Wish List</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/OrderDetailController/index">Cart</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/LoginController">Login/Signup</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/LoginController/logout">Logout</a>
                  </li>
			
			<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_dropdown_navbar -->
			
          </ul>
        </div>
      </div>
    </nav>

<div style="padding-top: 30px;">

<div style = "font-weight: bold; text-align: center;" class="my-4">
<?php
	if(LoginCore::isLoggedIn() == NULL){
        echo 'You are currently not logged in!<br>Unable to submit a FAQ';
    }else{
		echo  "Hello ", $_SESSION['username'],"! You can submit a question using the textbox."; 
		
		
		echo		"<form style='text-align:center' method='post' action='/FaqController/submit' class='form-horizontal'>";
		echo		"<div class='form-group'>";
		echo			"<textarea rows='4' cols='50' placeholder='Leave a FAQ!' name='faq'></textarea>";
		echo			"<div>";
		echo			"<input style='background-color: #007BFF; border-color: #007BFF; margin-top: 5px;' type='submit' class='btn btn-default' name='action' value='Submit FAQ'/>";
		echo			"</div>";
		echo			"</div>";
		echo		"</form>";
	}
?>
</div>


</div>








    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">2018 Copyright &copy; Cinematic Adventures 2</p>
		<p class="m-0 text-center text-white">By Ashfaq Uddin, Mathieu Boileau & Steven Franchetto</p>
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
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/other/vendor/jquery/jquery.min.js"></script>
    <script src="/other/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>