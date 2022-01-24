<?php

class Review extends Model{
	public $_PKName = 'review_Id';

	public $review;
	public $user_Id;
	public $movie_Id;
	public $rating;
	public $review_Id;
	
	public function __construct(){
		parent::__construct();
	}

	
	
}

?>