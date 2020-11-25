<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\Note;
use app\models\User;
use Rakit\Validation\Validator;

class NoteController extends Controller {

	public function store() {
		// echo json_encode(Request::all());
		$note = new Note;
		$validator = new Validator;
		$validation = $validator->validate($_POST + $_FILES, [
			'note' => 'required',
		]);
		$validation->setAliases([
			'note' => 'Note',
		]);
		$validation->validate();
		if ($validation->fails()) {
			$coll = $validation->errors();
			$col = $coll->toArray();
			$col['statusCode'] = 201;
			$col['name'] = User::find($_SESSION['uid'])->firstName;
			echo json_encode($col);
		} else {
			$note->fill(Request::all());
			$note->save();
			$message = '';
			$message .= '<div class="col-md-12">';
			$message .= '<div class="alert alert-success shadow-sm p-0" role="alert">';
			$message .= '<span class="p-2 d-inline-block">';
			$message .= $note->note;
			$message .= '</span><br>';
			$message .= '<span class="badge badge-light border border-light shadow-sm mb-0">';
			$message .= $note->user->username . '<br>' . date_format($note->created_at, 'd.m.Y - H:m');
			$message .= '</span>';
			$message .= '</div>';
			$message .= '</div>';

			$data = [];
			$data['statusCode'] = 200;
			$data['note'] = $message;
			echo json_encode($data);
		}
	}

	public function delete($id){
		$note = new Note;
		$note->find($id)->delete();
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}
