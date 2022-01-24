
<?php
	class MovieController extends Controller{

		//MVC/public/movies_controller

		public function index(){

				$aMovies = $this->model('Movie');
				$myMovies = $aMovies->get();

				$this->view('Movie/index',['movies'=>$myMovies]);
		}
		
		public function discounted(){
			$aMovie = $this->model('Movie');

			//echo date("Y-m-d");

			$myMovies = $aMovie->where('promotion_Id', '=', 1)->get();

			$this->view('Movie/discounted',['movies'=>$myMovies]);
		}

		public function upcoming(){
			$aMovie = $this->model('Movie');

			//echo date("Y-m-d");

			$myMovies = $aMovie->where('release_date', '>', date("Y-m-d"))->get();

			$this->view('Movie/upcoming',['movies'=>$myMovies]);
		}

		public function details($id){
			
			$aMovies = $this->model('Movie');
			$aReview = $this->model('Review');
			//$aMovies->Id = $id;
			$myMovie = $aMovies->where('movie_Id','=',$id)->get();
			$myReviews = $aReview->where('movie_Id','=',$id)->get();

			$this->view("/Movie/details",['movie'=>$myMovie, 'reviews'=>$myReviews]);
			
		}
 

		public function getDetailsJSON($id,$type){
			
			$aMovies = $this->model('Movie');
			$myMovie = $aMovies->where('movie_Id','=',$id)->get()[0];
			if($type=='d')
					$myMovie->price *= 0.8;
			$this->view("/Movie/detailsJSON",['movie'=>$myMovie]);
			
		}


		public function search(){
			$search = $_GET['search'];
				if($search == null){
					echo "you wrote nothing";
				}else{
				$aMovies = $this->model('Movie');

				$myMovies = $aMovies->where('title','LIKE',"%$search%")->get();
				$this->view("/Movie/test",['movies'=>$myMovies]);
			}
		}

		public function minPrice(){
			$search = $_GET['search'];
				if($search == null){
					echo "you wrote nothing";
				}else{
				$aMovies = $this->model('Movie');

				$myMovies = $aMovies->where('price','<=',"$search")->get();
				$this->view("/Movie/test",['movies'=>$myMovies]);
			}

		} 

		public function review(){
			$movie = $this->model('Review');
			if(isset($_POST['action'])){
				$movie->review = $_POST['review'];
				$movie->insert();
				header('location:/');
			}else{
				$this->view('Review/review');
			}

			/*
			$newReview = $this->model('Movie');
			$newReview -> review = $_POST['review'];
			$newReview->insert();
			*/

			//echo "$id";
		}

		public function advsearch(){
			$choice = $_GET['choices'];
			$search = $_GET['search'];
			if($search == null || $choice == 'All'){
				echo 'select valid options';
			}else{
				$aMovies = $this->model('Movie');

				$myMovies = $aMovies->where("$choice", 'LIKE', "%$search%")->get();
				$this->view("/Movie/test",['movies'=>$myMovies]);
			}
		}
	}
?>