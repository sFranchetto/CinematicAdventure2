<?php

	class WishListController extends Controller{

		public function index(){
			$aWishlist = $this->model('Wishlist');
			$myWishlist = $aWishlist->get();
			$this->view('Wishlist/index',['wishlist'=>$myWishlist]);
		}

		public function addToWishList($id){
			$aMovie = $this->model('Movie');
			$aWishlist = $this->model('Wishlist');

			$user = $_SESSION['username'];
			$userId = $_SESSION['userID'];
			
			
			$myMovie = $aMovie->where('movie_Id','=',$id)->get();
			$price = $myMovie[0]->price; //get price form selected movie

			$myWishlist = $aWishlist->get();


			$aWishlist->movie_Id = $id;
			$aWishlist->user_Id = $userId;
			$aWishlist->price = $price;
			$aWishlist->insert();

			
			header("location:/WishListController");
			$this->view('Wishlist/index',['wishlist'=>$myWishlist],['userId'=>$aWishlist->user_Id]);
		}

		public function deleteFromWishList($id){
			$userId = $_SESSION['userID'];
			$aWishList = $this->model('Wishlist');
			$aWishList->movie_Id = $id;
			//echo 'hello'; 
			//echo $userId;
			//echo $aOrderDetail->movieId;
			$aWishList->deleteFromWishList($id, $userId);
			//$aOrderDetail->delete();
			header("location:/WishListController");
		}

	}
?>