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
			
			<script>
	function myFunction() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("demo").innerHTML = "You selected: " + x;
}

</script> 
  
  <title>Cart</title>
  
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
             <li class="nav-item">
               <a class="nav-link" href="/FaqController/showAllFaqs">FAQ</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/WishListController/index">Wish List</a>
             </li>
             <li class="nav-item active">
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

  <main class ="main" style="margin-left: 150px; width: 1500px;">
    <div class="basket">
	
		<div  style="padding-top: 20px;">
		<h1><p><strong>
		Welcome to your Cart!
		</strong></p></h1>
		<p>
		</div>
<!--
      <div class="basket-module">
        <input id="promo-code" type="text" name="promo-code" placeholder="Enter a promotional code" maxlength="30" class="promo-code-field">
        <button style="margin-bottom: 10px; background-color: #007BFF; border-color: #007BFF"class="promo-code-cta">Apply</button>
      </div>
--> 
	  
	   <div class="basket-labels" align="center" style="margin-top:25px;width: 950px;">
			<table class="table table-bordered">
        <thead style="background-color: #007BFF; color: white; text-align:center">
          <tr>
			<th style="width: 76px;">Movie Title</th>
            <th style="width: 66px;">Price</th>
            <th style="width: 171px;">Quantity</th>
			<th style="width: 126px;">Movie Type</th>
			<th style="width: 56px;">Type</th>
			<th style="width: 183px;">Promo Code</th>
			<th style="width: 70px;">Remove</th>
          </tr>
        </thead>
        <tbody>
		
		<?php
echo "<div style = 'font-weight: bold; text-align: center;' class='my-4'>";
				if(LoginCore::isLoggedIn() == NULL){
					echo 'You are currently not logged in!<br>Unable to display your Cart';
		echo " </div>";		
				}else{
					
				$user = $_SESSION['userID'];

	
		foreach($data['orderDetail'] as $orderDetail){	
			foreach($data['movies'] as $movie){
      			if($orderDetail->user_Id == $user && $orderDetail->order_Id == 0){
					if($orderDetail->movie_Id == $movie->movie_Id){
			
								echo	"<tr>";
								echo        "<td>$movie->title</td>";
								echo        "<td>$orderDetail->price</td>";
								echo        "<td style='padding-bottom: 0px;'>";	
								echo				"<form method='post' action='OrderDetailController/editQuantity'>";
								echo				"<input type='hidden' name='orderdetail_Id' value='$orderDetail->orderdetail_Id'/>";
								echo 				"<input name='newQuantity' type='text' placeholder='$orderDetail->quantity' size='4'> </input>";
								
								echo				"<button style='margin-bottom: 10px; background-color: #007BFF; border-color: #007BFF'class='promo-code-cta' type:'submit'>✔</button>";
													
								echo					"</form>";
													
								echo					"</td>"; 
													
								echo        "<td>
													<form method='get' action='/OrderDetailController/changeType/$orderDetail->orderdetail_Id'>
				
													<input type='hidden' name='orderdetail_Id' value='$orderDetail->orderdetail_Id'/>
													
													
													<select action='/OrderDetailController/changeType' onchange='myFunction()' id='mySelect' name='choices' class='summary-delivery-selection'>

														<option value='phys'> Physical </option>
														
														<option value='dig'> Digital </option> 	

													</select>
													<input style='color: white; background-color: #007BFF; border-color: #007BFF' class='promo-code-cta' type='submit' value='Apply'/>
													</form>
													
											</td>";
											
								echo		"<td style='text-align:center'>$orderDetail->movie_type</td>";										
											
								echo        "<td style='padding-bottom: 0px;'>";

								echo 		"<form method='post' action='/OrderDetailController/usePromo'>";
								echo 		"<input type='hidden' name='orderdetail_Id' value='$orderDetail->orderdetail_Id'/>";
								echo 		"<input name='promo' type='text' placeholder='Promo Code' size='7' class='promo-code-field'> </input>";
								echo 		"<button type='submit' style='margin-bottom: 10px; background-color: #007BFF; border-color: #007BFF'class='promo-code-cta'> ✔ </button>";
								echo 		"</form>";								
													
								echo        "<td>	<a href='/OrderDetailController/deleteFromCart/$orderDetail->movie_Id'> Remove </a></td>";													
								echo	"</tr>";
			}} }
		}
	}	
?>  			
		 </tbody>
			</table>
		</div>
	</div> 
	  
	  
    </div>
    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
        <div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
        <div class="summary-total">
          <div class="total-title">Total price:</div>
          <div class="total-value final-value" id="basket-total">
				<?php			
				$totalPrice = 0;
						foreach($data['orderDetail'] as $orderDetail){
							if($orderDetail->user_Id == $user && $orderDetail->order_Id == 0){
								$totalPrice += $orderDetail->price * $orderDetail->quantity;
							}
						}	
							echo "$totalPrice <br/>";
				?>
		  </div>
        </div>
        <div class="summary-checkout">
			<a href="/OrdersController">
				<button style="margin-bottom: 10px; background-color: #007BFF; border-color: #007BFF"class="checkout-cta">Go to Secure Checkout</button>
			</a>
        </div>
      </div>
    </aside>
  </main>
  
   <!-- Footer -->
    <footer class="py-5 bg-dark" style="border-top-width: 10px; margin-top: 35px;">
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



<html>
<body>
	
		
		<?php
		$user = $_SESSION['userID'];
		
		foreach($data['orderDetail'] as $orderDetail){
			if($orderDetail->user_Id == $user && $orderDetail->order_Id == 0){
				echo "<p>User Id: $orderDetail->user_Id</p>";
				echo "<p>Movie Id: $orderDetail->movie_Id</p>";
				

				echo "<p>Quantity: $orderDetail->quantity</p>";
				echo "<form method='post' action='OrderDetailController/editQuantity'>";
				echo "<input type='hidden' name='orderdetail_Id' value='$orderDetail->orderdetail_Id'/>";
				echo "<input name='newQuantity' type='text' placeholder='$orderDetail->quantity' size='4'> </input>";
				echo "<button type='submit'> ✔ </button>";
				echo "</form>"; 
				

				echo "<p>Price: $orderDetail->price</p>";
				echo "<form method='post' action='/OrderDetailController/usePromo'>";
				echo "<input type='hidden' name='orderdetail_Id' value='$orderDetail->orderdetail_Id'/>";
				echo "<input name='promo' type='text' placeholder='Promo Code' size='7'> </input>";
				echo "<button type='submit'> ✔ </button>";
				echo "</form>";
				



				echo "<a href='/OrderDetailController/deleteFromCart/$orderDetail->movie_Id'> Delete </a>";
				echo "<p>======================</p>";
				//echo "$orderDetail->userId";
				//echo "$orderDetail->userId <br/>";
				//echo "$user";
				
				echo "<p>^^^^^^^^^^^^^^^^^^^^^^^</p>";
		}

	}
	$totalPrice = 0;
	foreach($data['orderDetail'] as $orderDetail){
		if($orderDetail->user_Id == $user && $orderDetail->order_Id == 0){
			$totalPrice += $orderDetail->price * $orderDetail->quantity;
		}
	}	
		echo "total price: $$totalPrice <br/>";
		echo "<a href=/OrdersController> Check Out </a>";
	?>

</body>
</html>