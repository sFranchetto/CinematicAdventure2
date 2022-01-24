<?php

	class ReviewController extends Controller{

		public function index($movieId){
			
			echo $movieId;
			$this->view('Review/review', ['movieId'=>$movieId]);
		}


		public function rate($rating, $id){
			$userId = $_SESSION['userID'];
			
			$newRating = $this->model('Review');

			$newRating->user_Id = $userId;
			$newRating->movie_Id = $id;
			$newRating->rating = $rating;
			$newRating->insert();
			header('location:/MovieController/Details/' . $id);
		}

		public function review(){
			$movieId = $_POST['movieId'];
			$userId = $_SESSION['userID'];
			//var_dump($_POST);
			$newReview = $this->model('Review');

			if(isset($_POST['review'])){

				$newReview->user_Id = $userId;
				$newReview->movie_Id = $movieId;
				$newReview->review = $_POST['review'];
				$newReview->insert();
				header('location:/MovieController/Details/' . $movieId);

			}else{
				header('location:/MovieController/Details/' . $movieId);
			}

		}

		public function myReviews(){
			$aReview = $this->model('Review');
			$myReview = $aReview->get();
			$this->view('Review/myReviews',['review'=>$myReview]);
		}

		public function deleteReview($id){
			$userId = $_SESSION['userID'];
			$aReview = $this->model('Review');
			$aReview->Id = $id;
			$aReview->deleteReview($id, $userId); //Using this method because it takes 
			header('location:/ReviewController/myReviews');
		}

		public function editRating($id){
			$aReview = $this->model('Review');
			
			$this->view('Review/editRating',['rating'=>$aReview]);
			$aReview = $aReview->where("review_Id", "=", $id)->get()[0];

			if(isset($_POST['choice'])){
				$rating = $_POST['choice'];
				$aReview->changeRating($rating,$id);
				header('location:/ReviewController/myReviews');
			}else{
				echo '';
			}
		}

		public function editReview($id){
			$aReview = $this->model('Review');

			$this->view('Review/editReview',['review'=>$aReview]);
			$aReview = $aReview->where("review_Id", "=", $id)->get()[0];
			
			
			//echo $aReview->$review_Id;
			
			//var_dump($aReview);
			if(isset($_POST['action']))
			{



				$review = $_POST['review'];
				$aReview->changeReview($review, $id);
				//var_dump($aReview);
				header('location:/ReviewController/myReviews');
			}
		}
	}
?>