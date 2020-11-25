<?php

namespace app\core;

use app\core\View;

abstract class Controller {

	protected $controller;

	protected $action;

	protected $data;

	public $view;

	public function __construct(string $controller, string $action, $data = []) {

		$this->controller = $controller;

		$this->action = $action;

		$this->data = $data;

		$this->view = new View();

	}
}