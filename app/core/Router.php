<?php
namespace app\core;
use app\controllers\ErrorController;

class Router {
	public static function route($url) {
		/**
		 * Get the controller name from URL
		 * [$controller description]
		 * @var [array]
		 */
		array_shift($url);
		$controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
		$controllerName = $controller;
		array_shift($url);
		/**
		 * Get the action from URL
		 * [$action description]
		 * @var [string]
		 */
		$action = (isset($url[0]) && $url[0] != '') ? $url[0] : 'index';
		$actionName = $action;
		array_shift($url);
		/**
		 * [$queryParams description]
		 * @var [type]
		 */
		$queryParams = $url;

		$controller = 'app\controllers\\' . $controllerName . 'Controller';
		if (class_exists($controller)) {
			$dispatch = new $controller($controllerName, $action);
			if (method_exists($controller, $action)) {
				call_user_func_array([$dispatch, $action], $queryParams);
			} else {
				$dispatch = new \app\controllers\ErrorController('Error', 'index');
				call_user_func_array([$dispatch, 'index'], $queryParams);

			}
		} else {
			$dispatch = new \app\controllers\ErrorController('Error', 'index');
			call_user_func_array([$dispatch, 'index'], $queryParams);
		}
	}
}