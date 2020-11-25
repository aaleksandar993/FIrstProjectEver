<?php

namespace app\core;

class Request {

	public static function uri() {

		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

	}

	public static function method() {

		return $_SERVER['REQUEST_METHOD'];

	}

	public static function all() {

		$data = [];

		foreach ($_POST as $key => $value) {
			if (is_array($value)) {
				$data[htmlspecialchars($key)] = json_encode((object) array_filter($value), JSON_FORCE_OBJECT);
			} else {
				$data[htmlspecialchars($key)] = htmlspecialchars($value);
			}

		}
		return $data;

	}
}