<?php

namespace app\controllers;

use app\core\Controller;
use app\models\User;

class UserController extends Controller {

	public function index() {
		/*
			Show profile of the curently logged in user with all data
		*/
		$user = User::find($_SESSION['uid']);
		$users = User::all();
		if ($user->role == 'superAdmin') {
			$this->view->render('user/index', compact('users'));
		}else{
			$this->view->render('error/401');
		}
	}

	public function show($id) {

		$user = User::find($id);

		if (is_null($user)) {

			$this->view->render('/error/404');
		}

		$this->view->render('user/show', compact('user'));
	}

	public function profile() {

		$user = User::find($_SESSION['uid']);

		if (is_null($user)) {

			$this->view->render('/error/404');
		}

		$this->view->render('user/profile', compact('user'));
	}

	public function edit() {

		$user = User::find($_SESSION['uid']);

		$this->view->render('user/edit', $user);
	}

	public function update() {

		$user = User::find($_SESSION['uid']);

		foreach ($_POST as $key => $value) {

			$user->$key = htmlspecialchars($value);
		}

		$user->save();

		header('location:/user');

	}

	public function delete($id) {

		$user = User::find($id);
		$user->delete();
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	public function approveUser($id = 0){
		$user = User::find($id);
		$user->role = 'admin';
		$user->save();
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}