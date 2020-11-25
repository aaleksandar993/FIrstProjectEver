<?php

namespace app\controllers;

use app\core\Controller;

class RegisterController extends Controller {

	public function index() {

		if (!isset($_SESSION['username'])) {
			$this->view->render('auth/register', []);
		} else {
			$this->view->render('error/404');
		}

	}
}