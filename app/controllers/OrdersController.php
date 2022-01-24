<?php

	class OrdersController extends Controller{

		public function index(){
			//echo 'in the index right now';
			$this->view('Order/index');
		}

		public function checkOut(){
			$newOrder = $this->model('Orders');
			//$aMovie = $this->model('Movie');
			$newOrderId = $this->model('OrderDetail');


			if(isset($_POST['action'])){
				$items = $newOrderId->where("order_Id", "=", 0)->get();
				$total = 0;
				
				foreach($items as $item){
					$total += $item->quantity * $item->price;
				}
 
				$newOrder->user_Id = $_SESSION['userID'];
				$newOrder->firstname = $_POST['firstName'];
				$newOrder->lastname =$_POST['lastName'];
				$newOrder->address =$_POST['address'];
				$newOrder->city =$_POST['city'];
				$newOrder->country =$_POST['country'];
				$newOrder->postal_code =$_POST['postalCode'];
				$newOrder->status = 'Pending';
				$newOrder->totalprice = $total;

				$newOrder->insert();
				
				$orderId = Model::$_connection->lastInsertId();	
				$newOrderId->insertOrderId($orderId);

				header('location:/OrdersController/orderMade');
			}
		}
		/*
		public function addingToTable($id){
			$orderId = $this->model('OrderDetail');
		}
*/	
		public function orderMade(){
			$newOrder = $this->model('Orders');
			$orderId = Model::$_connection->lastInsertId();

			$showOrder = $newOrder->where("orders_Id", "=", $orderId)->get();

			$this->view('Order/orderMade',['order'=>$showOrder]);	
		}
		public function myOrders(){
			$aOrder = $this->model('Orders');
			$aOrderDetail = $this->model('OrderDetail');
			$aMovie = $this->model('Movie');
			$myOrders = $aOrder->get();
			$myOrderDetail = $aOrderDetail->get();
			$myMovies = $aMovie->get();
			$this->view('Order/myOrders',['order'=>$myOrders, 'orderDetail'=>$myOrderDetail, 'movie'=>$myMovies]);
		}
	}
?>