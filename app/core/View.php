<?php

namespace app\core;

class View {

	protected $head;

	protected $body;

	protected $siteTitle;

	protected $outputBuffer;

	protected $layout = 'default';

	public function render(string $viewName, $data = []) {

		// RESOLVE

		extract($data);

		$viewArray = explode('/', $viewName);

		if (isset($_SESSION['loggedIn'])) {

			$pageName = implode(' / ', $viewArray);
			$viewString = implode('/', $viewArray);
			$page = $pageName;

		} elseif (!isset($_SESSION['loggedIn']) && $viewArray[1] == 'register') {

			$viewString = 'auth/register';

		} else {

			$viewString = 'auth/login';
		}

		if (file_exists(ROOT . 'app/views/' . $viewString . '.php')) {

			include ROOT . 'app/views/' . $viewString . '.php';
			include ROOT . 'app/views/layouts/' . $this->layout . '.php';

		} else {

			include ROOT . 'app/views/layouts/default.php';
		}
	}

	public function content($type) {

		if ($type == 'head') {

			return $this->head;

		} elseif ($type == 'body') {

			return $this->body;
		}

		return false;

	}

	public function start($type) {

		$this->outputBuffer = $type;

		ob_start();

	}

	public function end() {

		if ($this->outputBuffer == 'head') {

			$this->head = ob_get_clean();

		} elseif ($this->outputBuffer == 'body') {

			$this->body = ob_get_clean();

		} else {

			die('Oooops something went wrong!');

		}
	}

	public function siteTitle() {

		return $this->siteTitle;

	}

	public function setSiteTitle(string $title) {

		$this->siteTitle = $title;

	}

	public function setLayout(string $path) {

		$this->layout = $path;

	}

	private function toObject($data) {

		if (is_object($data)) {

			$this->data = $data;

		} else {

			$this->data = filter_var($data, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

			$this->data = (object) $data;

		}

		return $this->data;
	}
}
