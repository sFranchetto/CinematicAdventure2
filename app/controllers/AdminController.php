<?php

	class AdminController extends Controller{

		public function index(){
			$this->view('AdminViews/index');
		}

		public function viewMembers(){
			$members = $this->Model('User');
			$myMembers = $members->get();

			$this->view('AdminViews/viewMembers',['users'=>$myMembers]);
		}

		public function addMovie(){
			$movies = $this->Model('Movie');
			$myMovies = $movies->get();

			$this->view('AdminViews/movieListing',['movies'=>$myMovies]);
		}

		public function insertNewMovie(){
			
			
			$movie = $this->Model('Movie');

			if(isset($_POST['action'])){

				$movie->title = $_POST['title'];
				$movie->director = $_POST['director'];
				$movie->genre =$_POST['genre'];
				$movie->price =$_POST['price'];
				$movie->description =$_POST['description'];
				$movie->release_date =$_POST['release_date'];
				$movie->trailer =$_POST['trailer'];
				$movie->image_path =$this->uploadImage();

				$movie->insert();

				header('location:/AdminController/addMovie');
			}
			$this->view('AdminViews/addMovie');
		} 

		public function deleteFromListing($id){
			//echo 'hi';
			$myMovies = $this->Model('Movie');
			$myMovies->deleteFromListing($id);
			header('location:/AdminController/addMovie'); 
		}

		public function editMovie($id){
			$aMovie = $this->model('Movie');

			$aMovie = $aMovie->where("movie_Id", "=", $id)->get()[0];

			if(isset($_POST['action']))  
			{


				$aMovie->title = $_POST['title'];
				$aMovie->description = $_POST['description'];
				$aMovie->price = $_POST['price'];
				$aMovie->genre = $_POST['genre'];
				$aMovie->release_date = $_POST['release_date'];
				$aMovie->director = $_POST['director'];
				$aMovie->trailer = $_POST['trailer'];
				$aMovie->image_path = $_POST['image_path'];				

				$aMovie->update();

				header('location:/AdminController/addMovie');
			}else{
				$this->view('AdminViews/editMovie',['movies' => $aMovie]);
			}

		}

		public function viewOrders(){
			$orders = $this->model('Orders');
			$allOrders = $orders->get();

			$this->view('AdminViews/viewOrders',['orders' =>$allOrders]);
		}

		public function viewReviews(){
			$review = $this->model('Review');
			$movie = $this->model('Movie');
			
			$allReviews = $review->get();

			$movie = $movie->get();

			$this->view('AdminViews/viewReviews', ['reviews' =>$allReviews, 'movies' =>$movie]);
		}

		public function viewFaqs(){
			$faq = $this->model('Faq');
			$allFaqs = $faq->get();

			$this->view('AdminViews/viewFaqs', ['faqs' =>$allFaqs]);
		}

		public function deleteFaq($id){
			$myMovies = $this->Model('Faq');
			$myMovies->deleteFaq($id);
			header('location:/AdminController/viewFaqs');
		}

		public function editOrderStatus($id){
			$aOrder = $this->model('Orders');
			$this->view('AdminViews/editOrder',['order'=>$aOrder]);
			$aOrder = $aOrder->where("orders_Id", "=", $id)->get()[0];

			if(isset($_POST['order']))
			{
				$newOrderStatus = $_POST['order'];
				$aOrder->changeOrderStatus($newOrderStatus, $id);
				header('location:/AdminController/viewOrders');
			}
			$this->view('AdminController/viewOrders');
			
		}

		public function editFaq($id){
			$aFaq = $this->model('Faq');
			$aFaq = $aFaq->where("faq_Id", "=", $id)->get()[0];

			if(isset($_POST['action'])){
				$aFaq->question = $_POST['question'];
				$aFaq->answer = $_POST['answer'];
				$aFaq->update();
				header('location:/AdminController/viewFaqs');

			}else{

				$this->view('AdminViews/editFaq',['faqs' => $aFaq]);
			}
		}

		public function uploadImage(){
			$isImage = 0;
			$target_dir = "Image_Folder/";	//the folder where files will be saved
			$allowedTypes = array("jpg", "png", "jpeg", "gif", "bmp");// Allow certain file formats
			$max_upload_bytes = 5000000;

			foreach($_FILES as $key=>$theFile){
				$uploadOk = 1;
				if(isset($theFile)) {
					//Check if image file is a actual image or fake image
					//this is not a guarantee that malicious code may be passed in disguise
					$check = getimagesize($theFile["tmp_name"]);
					if($check !== false) {
						
						$uploadOk = 1;
						//return $theFile;
					} else {
						
						$uploadOk = 0;
						//return null;
					}
					$extension = strtolower(pathinfo(basename($theFile["name"]),PATHINFO_EXTENSION));
					//give a name to the file such that it should never collide with an existing file name.
					$target_file_name = uniqid().'.'.$extension;	
					$target_path = $target_dir . $target_file_name;
					//NOTE: that this file path probably should be saved to the database for later retrieval


					//You may limit the size of the incoming file... Check file size
					if ($theFile["size"] > $max_upload_bytes) {
						
						$uploadOk = 0;
											}

					// Allow certain file formats
					if(!in_array($extension, $allowedTypes)) {
						
						$uploadOk = 0;
						//return null;
					}

					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						$target_path = $target_dir."download.png";
						return $target_path;
					} else {// if everything is ok, try to upload file - to move it from the temp folder to a permanent folder
						if (move_uploaded_file($theFile["tmp_name"], $target_path)) {
							
							return $target_path;
						} else {
							$target_path = $target_dir."download.png";
							return $target_path;
						}
					}
				}
			}

		}
	}
?>