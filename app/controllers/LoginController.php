<?php

	class LoginController extends Controller{

		public function index(){
			$user = $this->model('User');
			
			if(isset($_POST['action']) && $_POST['action'] == 'Login')
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				

				LoginCore::login($username, $password);
				
				$role = $_SESSION["username"];
				
				
				///////GRANTING ADMIN ACCESS IN THIS BLOCK\\\\\\\\\\
				if($role == 'Admin' || $role == 'admin'){
					header('location:/AdminController');
				}
				else
					header('location:/');
				
				
			}
			else
				$this->view('Login/index');
		
	}
		

		public function signup(){
			$newUser = $this->model('User');
			
			if(isset($_POST['action'])){
				
				$newUser->username = $_POST['username'];
				$newUser->password = $_POST['password'];
				$newUser->email = $_POST['email'];
				$newUser->password = password_hash($_POST['password'],PASSWORD_DEFAULT);
				$newUser->insert();
				header('location:/LoginController/');
			}else{
				$this->view('Login/signup');
			}
		}

		public function logout(){
			LoginCore::logout();
			header('location:/LoginController');
		}

	

		public function changePassword(){
			$this->view('Login/changePassword');
			$changePass = $this->model('User');

			if(isset($_POST['action'])){
				$loggedIn = $_SESSION['userID'];
				$changePass->username = $_POST['username'];
				$changePass->user_Id = $_SESSION['userID'];
				$changePass->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$changePass->changePass($changePass->password, $loggedIn);
			}

		}

		public function myAccount(){
			$this->view('Login/myAccount');
		}
	}
?>