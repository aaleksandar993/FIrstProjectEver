<?php

namespace app\controllers;

use app\core\Controller;

class ErrorController extends Controller {

	public function index() {

		$this->view->render('error/401');

	}
}