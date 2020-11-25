<?php

namespace app\controllers;

use app\core\Controller;
use app\models\User;

class HomeController extends Controller {

	public function index() {

		$user = User::find(@$_SESSION['uid']);

		$this->view->render('home/index', compact('user'));

	}
}
