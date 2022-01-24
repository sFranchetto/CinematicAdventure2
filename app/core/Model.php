<?php

class Model{
	//protected
	public static $_connection;
    protected $_className = null;
    protected $_PKName = 'ID';// default name for the primary key

    //protected $_select;//TODO: SELECT $this->_className.*
	//protected $_from;//TODO: FROM $this->_className
	//protected $_join;//TODO: JOIN $other ON $this->_className.$this->_PKName = $other::$_PKName
	protected $_whereClause;
    protected $_orderBy;

	
	public function __construct(PDO $connection = null)
    {
		//database parameters
		$server = 'localhost';
		$DBName = 'cinematicadventures';
		$user = 'root';
		$pass = '';
		 
        self::$_connection = $connection;
        if (self::$_connection === null) {
            self::$_connection = new PDO("mysql:host=$server;dbname=$DBName", $user, $pass);
            self::$_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
		$this->_className = get_class($this);
    }

	protected function getProps(){
		//extract the deriving class name
		$exclusions = get_class_vars(__CLASS__);//properties from the Model base class to exclude from SQL
		
        //extract the deriving class properties
        $classProps = [];
		$array = get_object_vars($this);
		foreach ($array as $key => $value) {
			if(!array_key_exists($key, $exclusions))
				$classProps[] = $key;
		}
		return $classProps;
	}
	
	protected function toArray($properties){
        $data = [];
        foreach($properties as $prop)
            $data[$prop] = $this->$prop;
		return $data;
    }

    public function find($ID)
    {
		$selectOne 	= "SELECT * FROM $this->_className WHERE $this->_PKName = :$this->_PKName";

        $stmt = self::$_connection->prepare($selectOne);
        $stmt->execute(array($this->_PKName=>$ID));

        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->_className);
		$value = $stmt->fetch();
		//TODO: should this cause an exception when no record is found?
        return $value;
    }

    // SELECT * FROM Client WHERE firstName = 'Jon' AND lastName = 'Doe'
    public function where($field, $op, $value, $quote=true){
        //TODO : only if this is a string-type value
        if ($quote)
			$value = self::$_connection->quote($value);
        if($this->_whereClause == '')
            $this->_whereClause .= "WHERE $field $op $value";
        else
            $this->_whereClause .= " AND $field $op $value";
        return $this;
    }

    // SELECT * FROM Client ... ORDERBY firstName ASC, lastName ASC
    public function orderBy($field, $order = 'ASC'){
        if($this->_orderBy == '')
            $this->_orderBy .= "ORDERBY $field $order";
        else
            $this->_orderBy .= ", $field $order";
        return $this; 
    }

	//run select statements
    public function get(){
		$select	= "SELECT * FROM $this->_className $this->_whereClause $this->_orderBy";



        $stmt = self::$_connection->prepare($select);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->_className);
		//echo $select;
		return $stmt->fetchAll();
    }

	//don't insert the PK
    public function insert(){
		$properties = $this->getProps();
		$num = count($properties);
		$insert = '';
		if ($num  > 0){
			$insert 	= 'INSERT INTO ' . $this->_className . '(' . implode(',', $properties) . ') VALUES (:'. implode(',:', $properties) . ')';
		}
        
        //echo $insert;
        

        $stmt = self::$_connection->prepare($insert);
        $stmt->execute($this->toArray($properties));

        //echo $stmt->lastInsertId();
	}

	//need the PK to do anything
	public function update(){
		$properties = $this->getProps();
		$num = count($properties);
		$update = '';
		if ($num  > 0){
			//update
			$setClause = [];
			
			foreach($properties as $item)
				$setClause[] = sprintf('%s = :%s', $item, $item);
			$setClause = implode(', ', $setClause);
			$update = 'UPDATE ' . $this->_className . ' SET ' . $setClause . " WHERE $this->_PKName = :$this->_PKName";
		}
		echo $update;
        $stmt = self::$_connection->prepare($update);
		$properties[] = $this->_PKName;//add the primary key because it is required for the statement
        $stmt->execute($this->toArray($properties));
	}

	public function delete(){
		$delete = "DELETE FROM $this->_className WHERE $this->_PKName = :$this->_PKName";
        //echo $delete;
        $stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->_PKName=>$this->{$this->_PKName}));
	}

	#########################################################################
	#########################################################################
	#########################################################################
	#########################################################################
	#########################################################################
	#########################################################################
	#########################################################################
	#########################################################################
	#########################################################################
	#########################################################################
	#########################################################################

	/*****/
	
	public function changePrice($newPrice, $id, $type){
		$update = "UPDATE orderdetail SET price = $newPrice, movie_type = '$type' WHERE orderdetail_Id = $id";
		//echo $update;
		$stmt = self::$_connection->prepare($update);
        $stmt->execute(array($this->_PKName=>$id));
	}

	public function changePricePromo($newPrice, $id){
		$update = "UPDATE orderdetail SET price = $newPrice WHERE orderdetail_Id = $id";
		//echo $update;
		$stmt = self::$_connection->prepare($update);
        $stmt->execute(array($this->_PKName=>$id));
	}

	public function deleteFromCart($id, $userId){
		$thisUser = $_SESSION['userID'];
		
		$delete = "DELETE FROM $this->_className WHERE movie_Id = $id AND user_Id = $thisUser";

		//echo $delete;

        $stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->movieId=>$id));
	}

	public function deleteFromWishList($id, $userId){
		$thisUser = $_SESSION['userID'];
		
		$delete = "DELETE FROM $this->_className WHERE movie_Id = $id AND user_Id = $thisUser";

		//echo $delete;

        $stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->movieId=>$id));
	}

	public function deleteFromListing($id){
		$delete = "DELETE FROM $this->_className WHERE movie_Id = $id";
		//echo $delete;
		$stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->Id=>$id));
	}

	public function deletePromoCode($id){
		$delete = "DELETE FROM $this->_className WHERE promotion_Id = $id";
		//echo $delete;
		$stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->Id=>$id));
	}

	public function deleteReview($id, $userId){
		$thisUser = $_SESSION['userID'];
		
		$delete = "DELETE FROM $this->_className WHERE review_Id = $id AND user_Id = $thisUser";

		//echo $delete;

        $stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->movieId=>$id));
	}

	public function insertOrderId($id){
		$thisUser = $_SESSION['userID'];

		$update = "UPDATE orderdetail
					SET order_Id = $id
					WHERE user_Id = $thisUser AND order_Id = 0";
		
		//echo $update;

		$stmt = self::$_connection->prepare($update);
        $stmt->execute(array($this->order_Id=>$id));
	}

	public function deleteAfterAdd($id, $userId){

		$delete = "DELETE FROM wishlist WHERE movie_Id = $id AND user_Id = $userId";
		$stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->movieId=>$id));
	}

	public function deleteFaq($id){
		$delete = "DELETE FROM $this->_className WHERE faq_Id = $id";
		$stmt = self::$_connection->prepare($delete);
        $stmt->execute(array($this->_PKName=>$id));
	}

	###################################################################
	###################################################################
	###################################################################
	###################################################################
	###################################################################
	###################################################################
	###################################################################
	###################################################################
	###################################################################
	###################################################################
	###################################################################
	//---------------------------EDITS-------------------------------\\

	public function changePass($newpass, $id){
		//$loggedIn = $_SESSION['userID'];
		$update = "UPDATE USER SET password = '$newpass' WHERE user_Id = $id";
		//echo $update;
		$stmt = self::$_connection->prepare($update);
        $stmt->execute(array($this->_PKName=>$id));
	}

	public function changeReview($newReview, $id){
		
		//$update = "UPDATE review SET review = $newReview WHERE review_Id = $id";
		
		$update = "UPDATE review SET review = '$newReview' WHERE review_Id = $id";
		//echo $update;
		$stmt = self::$_connection->prepare($update);
        $stmt->execute(array($this->_PKName=>$id));
	}

	public function changeRating($newRating, $id){
		
		//$update = "UPDATE review SET review = $newReview WHERE review_Id = $id";
		
		$update = "UPDATE review SET rating = '$newRating' WHERE review_Id = $id";
		//echo $update;
		$stmt = self::$_connection->prepare($update);
        $stmt->execute(array($this->_PKName=>$id));
	}

	public function changeOrderStatus($newOrder, $id){
		$update = "UPDATE orders SET status = '$newOrder' WHERE orders_Id = $id";
		//echo $update;
		$stmt = self::$_connection->prepare($update);
        $stmt->execute(array($this->_PKName=>$id));
	}

	public function changeFaqDetails($id, $question, $answer){
		
		$update = "UPDATE faq SET question = '$question', answer = '$answer',
				   WHERE faq_Id = $id";
		//echo $update;
		$stmt = self::$_connection->prepare($update);
        $stmt->execute(array($this->_PKName=>$id));
	}

	public function updateQuantity($id, $quantity){

		$update = "UPDATE orderdetail SET quantity = '$quantity',
				   WHERE movie_Id = '$id'";
		echo $update;



	}
}
?>