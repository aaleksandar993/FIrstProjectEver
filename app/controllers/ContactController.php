<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\Contact;
use app\models\User;
use Rakit\Validation\Validator;
class ContactController extends Controller {
	public function show($id = 0) {
		$contact = Contact::findOrFail($id);
		return $this->view->render('contact/show', compact('contact'));
	}
	public function store() {
		// echo json_encode(Request::all());
		$contact = new Contact;
		$validator = new Validator;
		$validation = $validator->validate($_POST + $_FILES, [
			'email' => 'required',
			'name' => 'required',
			'phone' => 'required',
			'role' => 'required',
		]);
		$validation->setAliases([
		]);
		$validation->validate();
		if ($validation->fails()) {
			$coll = $validation->errors();
			$col = $coll->toArray();
			$col['statusCode'] = 201;
			$col['name'] = User::find($_SESSION['uid'])->firstName;
			echo json_encode($col);
		} else {
			$contact->fill(Request::all());
			$contact->company_id = $_POST['company_id'];
			$contact->user_id = $_SESSION['uid'];
			$contact->save();
			mkdir(ROOT.'public'.DS.'storage'.DS.'contacts'.$contact->id.DS);
			echo json_encode(array("statusCode" => 200));
		}
	}
	
	public function edit(){

	}
	public function update(){
			$contact = Contact::findOrFail($_POST['id']);
			$contact->fill(Request::all());
			$contact->save();
			echo json_encode(array("statusCode" => 200));
		
	}
}