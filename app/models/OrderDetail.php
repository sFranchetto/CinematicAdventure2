<?php

class OrderDetail extends Model{
	//public $Id;
	
	public $_PKName = 'orderdetail_Id';
	public $orderdetail_Id;
	public $user_Id;
	public $movie_Id;
	public $quantity;
	public $price;
	public $movie_type;

	public static $_connection;
    protected $_className = null;
    //protected $_PKName = 'ID';// default name for the primary key

    //protected $_select;//TODO: SELECT $this->_className.*
	//protected $_from;//TODO: FROM $this->_className
	//protected $_join;//TODO: JOIN $other ON $this->_className.$this->_PKName = $other::$_PKName
	protected $_whereClause;
    protected $_orderBy;

	public function __construct(){
		parent::__construct();
	}

	
	
}


?>