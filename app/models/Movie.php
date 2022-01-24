<?php

class Movie extends Model{
	public $_PKName = 'movie_Id';
	public $title;
	public $genre;
	public $director;
	public $price;
	public $movie_Id;
	public $description;
	public $release_date;
	public $image_path;
	public $trailer;

	public function __construct(){
		parent::__construct();
	}

	public function returnPrice(){
		return $price;
	}
}


?>