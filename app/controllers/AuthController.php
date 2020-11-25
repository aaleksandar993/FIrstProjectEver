<?php

namespace app\controllers;

use app\core\Controller;
use app\models\User;
use Rakit\Validation\Validator;

class AuthController extends Controller {
	public function login() {
		$validator = new Validator;
		$validation = $validator->validate($_POST, [
			'email' => 'required|email',
			'password' => 'required',
		]);
		$validation->validate();
		/*
			Send errors back to login page
		*/
		$errors = $validation->errors();
		$messages = $errors->toArray();
		if ($validation->fails()) {
			$this->view->render('/login', $messages);
		} else {
			$user = User::where('email', $_POST['email'])->first();
			if (!is_null($user)) {
				if ($user->role == 'admin' OR $user->role == 'superAdmin') {
					if (password_verify($_POST['password'], $user->password)) {
					// check login and make a session
					$_SESSION['user'] = $user->firstName;
					$_SESSION['loggedIn'] = 1;
					$_SESSION['uid'] = $user->id;
					$_SESSION['username'] = $user->username;
					unset($_POST);
					header('location:/');
				}
				} else {
					$message = 'Account not authorized yet!';
					$this->view->render('/login',compact('message'));
				}
			} else {
				$message = "Account doesnt exist!";
				$this->view->render('/login',compact('message'));
			}
		}
	}
	public function registerCompany() {
		$_SESSION['user'] = 'aleksandar';
		$_SESSION['username'] = 'aleksandar';
		header('location:/');
	}
	public function registerUser() {
		$validator = new Validator;
		$validation = $validator->make($_POST, [
			'firstName' => 'required|min:2|max:250',
			'surname' => 'required|min:2|max:255',
			'username' => 'required|min:2|max:255',
			'password' => 'required|min:6|max:255',
			'email' => 'required|email',
		]);
		$validation->validate();
		$errors = $validation->errors();
		$messages = $errors->toArray();
		if ($validation->fails()) {
			$this->view->render('/register', $messages);
		} else {
			User::create([
				'firstName' => $_POST['firstName'],
				'surname' => $_POST['surname'],
				'email' => $_POST['email'],
				'username' => $_POST['username'],
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
				'role' => 'user',
			]);
			unset($_POST);
			header('location:/');
		}
	}
	public function logout() {
		session_destroy();
		// Redirect to the login page:
		header('Location: /login');
	}
}