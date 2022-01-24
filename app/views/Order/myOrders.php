<html>
   <head>
      <link rel="icon" type="image/png" href="/other/Images/LogoNew3.png"/>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>My Order History</title>
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
                  <li class="nav-item">
                     <a class="nav-link" href="/FaqController/About">About</a>
                  </li>
                  <li class="nav-item active">
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
	 

<!--Table-->	 

<!------ Include the above in your HEAD tag ---------->

<div style="padding-top: 20px;" class="container">
	<div>
	<a href="/LoginController/myAccount"> Back to Account Settings </a>
	</div>
<p style="padding-top: 8px">
	<div  style="text-align:center;">
	<h4><p><strong>
	Your Order History
	</strong></p></h4>
	</div>
</p>
	<div>
		<div align="center" style="margin-top:25px;">
			<table class="table table-bordered">
        <thead style="background-color: #007BFF; color: white; text-align:center">
          <tr>
            <th>Order #</th>
			<th>Movie Id</th>
            <th>Movie Title</th>
            <th>Price</th>
            <th>Movie Type</th>
          </tr>
        </thead>
        <tbody>
		
<?php
	echo "<div style = 'font-weight: bold; text-align: center;' class='my-4'>";
		if(LoginCore::isLoggedIn() == NULL){
			echo 'You are currently not logged in!<br>Unable to display your order history';
	echo " </div>";		
		}else{
			
			$user = $_SESSION['userID'];
			
/*
			foreach($data['order'] as $orders){
				if($orders->user_Id == $user){
					
					foreach($data['orderDetail'] as $orderDetail){
						if($orderDetail->user_Id == $user){ 
							foreach($data['movie'] as $movie){
								if($movie->movie_Id == $orderDetail->movie_Id){
		
									echo	"<tr>";
									echo        "<td>$orders->orders_Id</td>";
									echo        "<td>$orderDetail->movie_Id</td>";
									echo        "<td>$movie->title</td>";
									echo        "<td>$movie->price</td>";
									echo        "<td>$orders->totalprice</td>";
									echo	"</tr>";
								}
							}
						}
					}
				}
			}*/
		}

    foreach($data['orderDetail'] as $detail){
      if($detail->user_Id == $user && $detail->order_Id != 0){
        foreach($data['movie'] as $movie){
                if($movie->movie_Id == $detail->movie_Id){
                  echo "<tr>";
                  echo        "<td>$detail->order_Id</td>";
                  echo        "<td>$detail->movie_Id</td>";
                  echo        "<td>$movie->title</td>";    
                  echo        "<td>$detail->price</td>";
                  if($detail->movie_type == 'p'){
                    echo "<td> Physical </td>";
                  }else{
                    echo "<td> Digital </td>";
                  }
                  echo  "</tr>";
               }
        }
      }
    }

?>  
		  </tbody>
			</table>
		</div>
	</div>
</div>
<!--Table-->	  








	
	
	
	
	
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
