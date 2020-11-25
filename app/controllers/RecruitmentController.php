<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\Recruitment;
use app\models\User;
use Rakit\Validation\Validator;

class RecruitmentController extends Controller {

	public function index() {
		$this->view->render('recruitment/index');
	}

	public function store() {
		// echo json_encode(Request::all());
		$recruitment = new Recruitment;
		$validator = new Validator;
		$validation = $validator->validate($_POST + $_FILES, [
			'user_id' => 'required',
			'job_id' => 'required',
			'candidate_id' => 'required',
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
			$recruitment->fill(Request::all());
			$recruitment->status = 'assigned';
			$recruitment->save();
			echo json_encode(array("statusCode" => 200));
		}
	}

	public function update() {
		// die(var_dump($_POST));
		$recruitment = Recruitment::where('job_id',$_POST['job_id'])->where('candidate_id',$_POST['candidate_id'])->get()->first();
		// die(var_dump($recruitment));
		$recruitment->status = $_POST['status'];
		$recruitment->save();
		echo json_encode(array(
								"statusCode" => 200, 
								"status" => ucwords($recruitment->status), 
								"candidate_id" => $recruitment->candidate_id,
								"job_id"=>$recruitment->job_id
							));
		// header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	public function delete()
	{
		$recruitment = new Recruitment;

		

		try {
			$recruitment::where('job_id',$_POST['job_id'])->where('candidate_id', $_POST['candidate_id'])->delete();
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		} catch (Exception $e) {
			
		}
	}

}