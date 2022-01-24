<!DOCTYPE html>
<html lang="en">

  <head>
  
	<link rel="icon" type="image/png" href="/other/Images/LogoNew3.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Us</title>

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
                     <a class="nav-link" href="/">Home 	
                     </a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="/FaqController/About">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/LoginController/myAccount">Account</a>
                  </li>
                  <li class="nav-item">
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

    <!-- Add code here -->
<p style="text-align:center;">
	<div  style="text-align:center; padding-top: 20px;">
	<h1><p><strong>
	Who are we?
	</strong></p></h1>
	<p>
	Whether you want to purchase a movie for yourself, a friend, or anyone, you tend to be picky while selecting a website.<br>
	Often, you won't necessarily find your movie in other sites. But rest assure, you will definitly find it here, at Cinematic Adventures 2!<br>
	Cinematic Adventures 2 is known world wide for delivering and selling every type of movie available in the market.<br>
	Our goal is to be the world's favorite destination to purchase movies, digital and physical, at a great value and unique selection!
	</p>
	<br>
	<h3><p><strong>
	Key people behind this innovation
	</strong></p></h3>
</div>
	<div class="row" style="text-align:center; margin: auto; width: 70%; padding: 10px;">
		  <div class="column">
			<div class="card">
			<p style="text-align:center;">
			  <img style="width: 315px;height: 300px;" src="/other/Images/fart2.jpg" alt="Jane">
			  </p>
			  <div class="container">
				<h2>Ashfaq Uddin</h2>
				<p class="title">Brown Guy</p>
				<p>Some text that describes me lorem ipsum ipsum lorem.</p>
				<p>ashfaq.uddin@cinematicadventures.com</p>
			  </div>
			</div>
		  </div>

		  <div class="column">
			<div class="card">
			<p style="text-align:center;">
			  <img style="width: 315px;height: 300px;" src="/other/Images/fart.png" alt="Mike">
			  </p>
			  <div class="container">
				<h2>Mathieu Boileau</h2>
				<p class="title">So-called Brown Guy</p>
				<p>Some text that describes me lorem ipsum ipsum lorem.</p>
				<p>mathieu.boileau@cinematicadventures.com</p>
			  </div>
			</div>
		  </div>
		  
		  <div class="column">
			<div class="card">
			<p style="text-align:center;">
			  <img style="width: 315px;height: 300px;" src="/other/Images/fart2.jpg" alt="John">
			  </p>
			  <div class="container">
				<h2>Steven Franchetto</h2>
				<p class="title">Farting Guy</p>
				<p>Some text that describes me lorem ipsum ipsum lorem.</p>
				<p>steven.franchetto@cinematicadventures.com</p>
			  </div>
			</div>
		  </div>
	</div>
</p>
	
	

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
