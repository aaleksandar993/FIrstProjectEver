<?php

namespace app\controllers;

use app\core\Controller;

class LoginController extends Controller {

	public function index() {

		if (!isset($_SESSION['username'])) {
			$this->view->render('auth/login');
		} else {
			$this->view->render('error/404');
		}

	}
}