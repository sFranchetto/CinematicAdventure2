<?php

	class OrderDetailController extends Controller{

		public function index(){
			$aOrderDetail = $this->model('OrderDetail');
			$aMovie = $this->model('Movie');
			$myOrderDetail = $aOrderDetail->get();
			$myMovies = $aMovie->get();
			$this->view('OrderDetail/index',['orderDetail'=>$myOrderDetail, 'movies'=>$myMovies]);
		}

		public function addToCart($id){
			$aMovies = $this->model('Movie');
			$aOrderDetail = $this->model('OrderDetail');
			$aWishList = $this->model('Wishlist');

			$user = $_SESSION['username'];
			$userId = $_SESSION['userID'];

			$myMovie = $aMovies->where('movie_Id','=',$id)->get();


			$price = $myMovie[0]->price; //get price form selected movie
			$myTitle = $myMovie->title;
			
			$myOrderDetail = $aOrderDetail->get();

			//var_dump($myOrderDetail);
			

			$aOrderDetail->user_Id = $userId;
			$aOrderDetail->movie_Id = $id;
			$aOrderDetail->quantity = 1;
			$aOrderDetail->price = $price;
			$aOrderDetail->movie_type = 'p';
			$aOrderDetail->insert();
			
			$aWishList->deleteAfterAdd($id, $userId);
			
			
			
			header("location:/OrderDetailController");
			$this->view('OrderDetail/index', ['orderDetail'=>$myOrderDetail],['userId'=>$aOrderDetail->userId]);
			

		}

		public function editQuantity(){
			$newQuantity = $this->model('OrderDetail');

			$selectedId = $_POST['orderdetail_Id'];
			$myId = $newQuantity->where('orderdetail_Id', '=', $selectedId)->get()[0];

			$myId->quantity = $_POST['newQuantity'];
			
			$myId->update();
			header("location:/OrderDetailController"); 
		}

		public function usePromo(){
				$aOrderDetail = $this->model('OrderDetail');
				$aPromoCode = $this->model('Promotion');
				$aMovie = $this->model('Movie');
				
				

				$selectedId = $_POST['orderdetail_Id'];
				
				$promoCode = $_POST['promo'];
				
				$myPromoCode = $aPromoCode->where('promotion_code', '=', $promoCode)->get()[0];

				if($myPromoCode == null){ //if the promo code entered does not match
					header("location:/OrderDetailController");
				}

				else{
				$myOrderDetail = $aOrderDetail->where('orderdetail_Id', '=', $selectedId)->get()[0];
				
				$movieId = $myOrderDetail->movie_Id;
				$myMovie = $aMovie->where('movie_Id', '=', $movieId)->get()[0];
				$getPrice = $myMovie->price;
				
				////MESSY BUT WORKS \\\\
				$selectedCode = $myPromoCode->percentOff;
				$selectedPrice = $getPrice;
				$conversion = 0 . '.' . $selectedCode;
				$priceDeducted = $selectedPrice * $conversion;

				$newPrice = $selectedPrice - $priceDeducted;

				$finalPrice = number_format((float)$newPrice, 2, '.', '');
				///////////\\\\\\\\\\\\\\\
				$myOrderDetail->changePricePromo($finalPrice, $selectedId);
			}
				header("location:/OrderDetailController");
		}

		public function changeType($id){
			$aMovie = $this->model('Movie');
			$choice = $_GET['choices'];
			$aOrderDetail = $this->model('OrderDetail');
			$myOrderDetail = $aOrderDetail->where('orderdetail_Id', '=', $id)->get()[0];
			$movieId = $myOrderDetail->movie_Id;
			$myMovie = $aMovie->where('movie_Id', '=', $movieId)->get()[0];
			$getPrice = $myMovie->price;
			
			if($choice == 'dig'){
				
				//echo $originalPrice;
				
				//$getPrice = $myOrderDetail->price;
				$newPrice = $getPrice - 5;
				$type = 'd';
				$myOrderDetail->changePrice($newPrice, $id, $type);
				header("location:/OrderDetailController");
			}else{
				$newPrice = $getPrice;
				$type = 'p';
				$myOrderDetail->changePrice($newPrice, $id, $type);
				header("location:/OrderDetailController");
			}
		} 

		public function deleteFromCart($id){
			$userId = $_SESSION['userID'];
			$aOrderDetail = $this->model('OrderDetail');
			$aOrderDetail->movie_Id = $id;
			//echo 'hello';
			//echo $userId;
			//echo $aOrderDetail->movieId;
			$aOrderDetail->deleteFromCart($id, $userId);
			//$aOrderDetail->delete();
			header("location:/OrderDetailController");
		}
		
	}
?>