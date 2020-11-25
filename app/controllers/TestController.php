<?php
namespace app\controllers;
use app\core\Controller;

class TestController extends Controller {
	public function index() {
		$this->view->render('test/index');
	}
	public function company() {
		$this->view->render('test/company');
	}
	public function job() {
		$this->view->render('test/job');
	}
}