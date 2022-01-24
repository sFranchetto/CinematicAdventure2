<?php

class User extends Model{
	public $username;
	public $password;
	public $email;

	public function __construct(){
		parent::__construct();
	}

}

?>