<?php

	class PromotionController extends Controller{

		public function index(){
			$aPromotion = $this->model('Promotion');
			$myPromotions = $aPromotion->get();
			$this->view('Promotion/index',['promotions'=>$myPromotions]);
		}

		public function createDiscountCode(){

				
				$promotion = $this->Model('Promotion');

				if(isset($_POST['action'])){

					$promotion->promotion_code = $_POST['code'];
					$promotion->percentOff = $_POST['percentOff'];
						
					$promotion->insert();
					header('location:/PromotionController');
					
				}else{
					$this->view('Promotion/createCode');
				}
				
				

		}

		public function deleteDiscountCode($id){
				$promotion = $this->Model('Promotion');
				$promotion->deletePromoCode($id);
				
				header('location:/PromotionController');
		}

		public function editDiscountCode($id){
			$aCode = $this->model('Promotion');
			$aCode = $aCode->where("promotion_Id", "=", $id)->get()[0];

			if(isset($_POST['action'])){
				$aCode->percentOff = $_POST['percentOff'];
				$aCode->promotion_code = $_POST['code'];
				$aCode->update();
				header('location:/PromotionController');

			}else{

				$this->view('Promotion/editCode',['codes' => $aCode]);
			}
		}
	}	
?>