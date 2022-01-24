<html>
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
      <style>
         form {
         display: inline-block; //Or display: inline; 
         }
      </style>
      <script>
         function myFunction() {
            var x = document.getElementById("mySelect").value;
            document.getElementById("demo").innerHTML = "You selected: " + x;
         }
         
      </script> 
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
                  <li class="nav-item">
                     <a class="nav-link" href="/">Home
                     </a>
                  </li>
                  <li class="nav-item">
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
      <!-- Page Content -->





<div>
<div style="padding-top: 25px;">

	<?php
	foreach($data['movie'] as $movie){
        echo 	"<div>";

	    echo  	  "<div align='center' class='card h-100'>";

        echo   	    "<a href='#'><img style=' width: 250px; height: 300px;' class='card-img-top' src='/$movie->image_path' alt=''></a>";

        echo   	   "<div class='card-body' style='width: 540px; height: 240px;'>";

        echo   	  "<h4 class='card-title'>";
        echo  	 	 "<a href='/MovieController/Details/$movie->movie_Id'>$movie->title</a>";
        echo 	  "</h4>";
        echo  	    "<h5>$$movie->price</h5>";
		echo   	    "<p class='card-text'><strong>Movie Description:</strong></p>";
        echo   	    "<p class='card-text'>$movie->description</p>";
		echo   	    "<p class='card-text'><strong>Director: </strong>$movie->director</p>";
        echo   	    "<p class='card-text'><strong>Genre: </strong>$movie->genre</p>";

		echo "<a href='/ReviewController/$movie->movie_Id'> Write a review </a>";
        echo "</div>";
		
        echo 	"<div>";
		echo "<div><a href='/'> Go back to Listing </a></div>";
		echo "<p>====================================================================</p>";
		echo "<p><strong>Reviews left by other customers:</strong></p>";
		echo    "</div>";

	}	
	?>

	<?php
	foreach($data['reviews'] as $review){
		echo "<p>$review->review</p>";
		echo "<p>$review->rating</p>";
	}
	?>
</div>
</div>


 <!-- Footer -->
 <div>
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
  </div>

    <!-- Bootstrap core JavaScript -->
    <script src="/other/vendor/jquery/jquery.min.js"></script>
    <script src="/other/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>