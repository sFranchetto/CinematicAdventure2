<?php

	class FaqController extends Controller{

		public function index(){
				$this->view('Faq/index');
			}
		

		public function submit(){
			$newFaq = $this->model('Faq');
			$userId = $_SESSION['userID'];
 
			if(isset($_POST['faq'])){

				$newFaq->user_Id = $userId;
				$newFaq->question = $_POST['faq'];
				$newFaq->insert();
				header('location:/FaqController/showFaqs');
			}
		}

		public function showFaqs(){
			$aFaq = $this->model('Faq');
			$myFaqs = $aFaq->get();
			$this->view('Faq/myFaqs', ['faq' => $myFaqs]);
		}

		public function showAllFaqs(){
			$aFaq = $this->model('Faq');
			$myFaqs = $aFaq->get();
			$this->view('Faq/showAllFaqs', ['faq' => $myFaqs]);
		}
		
		public function about(){
			$this->view('Faq/About');			
		}
	}
?>