<?php

class Orders extends Model{
	public $user_Id;
	public $orders_Id;
	public $firstname;
	public $lastname;
	public $address;
	public $city;
	public $postal_code;
	public $status;
	public $totalprice;
	public $country;

	public function __construct(){
		parent::__construct();
	}

	
	
}


?>