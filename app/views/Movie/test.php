<html>
   <head>
      <link rel="icon" type="image/png" href="/other/Images/LogoNew3.png"/>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Searched Movies</title>
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
                  <li class="nav-item active">
                     <a class="nav-link" href="/">Home
                     <span class="sr-only">(current)</span>
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
      <div class="container">
         <div class="row">
            <div class="col-lg-3">
               <h1 class="my-4" style="text-align: center">Cinematic Adventures 2</h1>
               <div style="text-align: center ;padding-bottom: 20px; font-weight: bold;">
                  <?php
                     if(LoginCore::isLoggedIn() == NULL){
                     	echo 'You are currently not logged in!';
                     }else{
                     	echo "Hello ", $_SESSION["username"];
                     }
                     //echo LoginCore::isLoggedIn() . " sdfsdf ";
                     //echo "Hello ", $_SESSION["userID"];
                     //$userId = $_SESSION["userID"];
                     //echo $userId;
                     ?>
               </div>
               <div class="list-group">
                  <a href="/MovieController/upcoming" class="list-group-item">Upcoming Movies</a>
                  <a href="/MovieController/discounted" class="list-group-item">Discounted Movies</a>
               </div>
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
               <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                     <div class="carousel-item active">
                        <a target="_blank" href="https://youtu.be/EN6LMV4-Dfs"><img class="d-block img-fluid" src="/other/Images/HawaiiFive0.png" alt="First slide"></a>
                     </div>
                     <div class="carousel-item">
                        <a target="_blank" href="https://youtu.be/nNJCZXS7xu8"><img class="d-block img-fluid" src="/other/Images/Intelligence.jpg" alt="Second slide"></a>
                     </div>
                     <div class="carousel-item">
                        <a target="_blank" href="https://youtu.be/_Kuy8YExHDI"><img class="d-block img-fluid" src="/other/Images/WalkingDead.jpg" alt="Third slide"></a>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
               <!--	  
                  <div class="basket-module">
                  	<input id="searchBar" type="text" name="Search" placeholder="Search" maxlength="30" size="40" class="searchBar">
                  	<button class="promo-code-cta">Search</button>
                  </div>
                  -->		
               <div style="text-align:center">
                  <form action="/MovieController/search/" method="get">
                     <input id="searchBar" name="search" type="text" size="40" placeholder="Search for a movie" class="searchBar"/>
                     <input type="submit" value="Search" />
                  </form>
                  <form action="/MovieController/minPrice/" method="get">
                     <input name="search" type="text" size="40" placeholder="Maximum price" />
                     <input type="submit" value="Max Price" />
                  </form>
                  <form action="/MovieController/advsearch" method="get">
                     <select action="/MovieController/advsearch" onchange="myFunction()" id="mySelect" name="choices">
                        <option  selected="selected">All</option>
                        <option value="title">Title</option>
                        <option value="director">Director</option>
                        <option value="genre">Genre</option>
                     </select>
                     <input name="search" type="text" size="25" placeholder="Field">
                     <input type="submit" value="Go"/>
                  </form>
				  <div>
				  <form action="/">
					<input type="submit" value="Reset Search"/>
				  </form>
				  </div>
               </div>  

			<div class="row">

				<?php 
                  foreach($data['movies'] as $movie){
                      if($movie->release_date < date("Y-m-d")){
                      echo 	"<div class='col-lg-4 col-md-6 mb-4'>";
                      echo  	  "<div class='card h-100'>";
                      echo   	    "<a href='#'><img class='card-img-top' src='/$movie->image_path' width='242.984px' height='350px' alt=''></a>";
                      echo   	   "<div class='card-body'>";
                      echo   	  "<h4 class='card-title'>";
                      echo  	  "<a href='/MovieController/Details/$movie->movie_Id'>$movie->title</a>";
                      echo 	"</h4>";
                      echo  	    "<h5>$$movie->price</h5>";
                      echo   	    "<p class='card-text'>$movie->description</p>";
                      echo   	   "</div>";
					  
					  echo "<div>";
					  
					  echo "<div>";
					  echo "<a style='text-align: right' class='nav-link' href='/MovieController/Details/$movie->movie_Id'>Details</a>";
					  echo "</div>";
					  
					  echo "<div>";
					  echo "<a style='text-align: right' class='nav-link' href='/OrderDetailController/addToCart/$movie->movie_Id'>Add to cart</a>";
					  echo "</div>";
					  
					  echo "<div>";
					  echo "<a style='text-align: right' class='nav-link' href='/WishListController/addToWishList/$movie->movie_Id'>Add to wish list</a>";
					  echo "</div>";
					  
					  echo "</div>";				  

                      echo    	  "<div class='card-footer'>";
                      echo    	     '<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>';
                      echo    	  "</div>";
                      echo    	"</div>";
                      echo 	"</div>";
                  }}
                  ?>
				
			
			</div>
			   
            </div>
            <!-- /.row -->
         </div>
         <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
      </div>
      <!-- /.container -->

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