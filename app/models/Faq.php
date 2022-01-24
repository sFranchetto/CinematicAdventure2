<?php

class Faq extends Model{
	public $_PKName = 'faq_Id';
	public $answer;
	public $question;
	public $user_Id;
	public $faq_Id;
	
	public function __construct(){
		parent::__construct();
	}

}


?>