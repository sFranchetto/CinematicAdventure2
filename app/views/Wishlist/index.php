<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" type="image/png" href="/other/Images/LogoNew3.png"/>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="/css/css/CartCSS.css" rel="stylesheet">

   <!-- Bootstrap core CSS -->
    <link href="/other/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/css/shop-homepage.css" rel="stylesheet">
	
	<script src="/js/js/Cart.js"></script>
	
	<link href="/css/css/BackToTop.css" rel="stylesheet">
	<script src="/js/js/BackToTop.js"></script>
  
  <title>Wish List</title>
  
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
                     <a class="nav-link" href="/FaqController/About">About</a>
                  </li>
            <li class="nav-item">
              <a class="nav-link" href="/LoginController/myAccount">Account</a>
            </li>
			<li class="nav-item ">
			  <a class="nav-link" href="/FaqController/showAllFaqs">FAQ</a>
			</li>
            <li class="nav-item active">
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
          </ul>
        </div>
      </div>
    </nav>
	
  <main class ="main" >
    <div class="basket"> 
	<div  style="padding-top: 20px;">
		<h1 style="text-align:center"><p><strong>
		Welcome to your Wish List!
		</strong></p></h1>
		<p>
		</div>
	   <div class="basket-module" style="padding-top: 20px;">
        <input id="promo-code" type="text" name="promo-code" placeholder="Search" maxlength="30" class="promo-code-field">
        <button style="margin-bottom: 10px; background-color: #007BFF; border-color: #007BFF" class="promo-code-cta">Search</button>
      </div>
	 
	 <div class="basket-labels" align="center" style="margin-top:25px;">
			<table class="table table-bordered">
        <thead style="background-color: #007BFF; color: white; text-align:center">
          <tr>
			<th>Movie Id</th>
            <th>Price</th>
			<th>Add to Cart</th>
            <th>Delete from Wish List</th>
          </tr>
        </thead>
        <tbody>
		
<?php
	echo "<div style = 'font-weight: bold; text-align: center;' class='my-4'>";
				if(LoginCore::isLoggedIn() == NULL){
					echo 'You are currently not logged in!<br>Unable to display your order Wish List';
		echo " </div>";		
				}else{
					$user = $_SESSION['userID'];

					foreach($data['wishlist'] as $wishlist){
								if($wishlist->user_Id == $user){
						
													echo	"<tr>";
													echo        "<td>$wishlist->movie_Id</td>";
													echo        "<td>$wishlist->price</td>";
													echo        "<td><a href='/OrderDetailController/addToCart/$wishlist->movie_Id'> Add to cart</a></td>";
													echo        "<td><a href='/WishListController/deleteFromWishList/$wishlist->movie_Id'> Remove from Wish List</a></td>";
													echo	"</tr>";
								}
					}
				}
					
?>  
		
		
		 </tbody>
			</table>
		</div>
	</div>
	
	    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your wish list</div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total">130.00</div>
        </div>
      </div>
    </aside>
	
  </main>
  
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
	
	
	
	
	
	
	
	<?php echo $_SESSION['username']?>
		<p> in your wishlist! </p>
		<a href="/"> Home </a>
		
		<?php
		$user = $_SESSION['userID'];
		
		foreach($data['wishlist'] as $wishlist){
			if($wishlist->user_Id == $user){
				echo "<p>User Id: $wishlist->user_Id</p>";
				echo "<p>Movie Id: $wishlist->movie_Id</p>";
				echo "<p>Price: $wishlist->price</p>";
				
				echo "<a href='/WishListController/deleteFromWishList/$wishlist->movie_Id'> Remove from Wish List </a>";
				echo "<a href='/OrderDetailController/addToCart/$wishlist->movie_Id'> Add to cart </a>";
				echo "<p>======================</p>";
				//echo "$orderDetail->userId";
				//echo "$orderDetail->userId <br/>";
				//echo "$user";
				
				echo "<p>^^^^^^^^^^^^^^^^^^^^^^^</p>";
		}

	}	
	//echo "<a href=/OrdersController> Check Out </a>";
	?>
