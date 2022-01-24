<?php

class Promotion extends Model{
	public $_PKName = 'promotion_Id';
	
	public $promotion_Id;
	public $percentOff;
	public $promotion_code;

	public function __construct(){
		parent::__construct();
	}

}

?>