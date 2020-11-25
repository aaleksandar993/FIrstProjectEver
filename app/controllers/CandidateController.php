<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\Candidate;
use app\models\User;
use Rakit\Validation\Validator;

class CandidateController extends Controller 
{
	public function index() {
		$candidates = Candidate::where('role', 'candidate')->get();
		$this->view->render('candidate/index', compact('candidates'));
	}
	public function create() {
		$this->view->render('candidate/create');
	}
	public function show($id = 0) {
		if ($id) {
			$candidate = Candidate::find($id);
			if (!is_null($candidate)) {
				$this->view->render('candidate/show', compact('candidate'));
			} else {
				$this->view->render('error/404');
			}
		} else {
			$this->view->render('error/401');
		}
	}
	public function edit($id = 0) {
		$candidate = Candidate::findOrFail($id);
		if (!is_null($candidate)) {
			$this->view->render('candidate/edit', compact('candidate'));
		} else {
			$this->view->render('error/404');
		}
	}
	public function update($id) {
		$candidate = Candidate::find($id);
		/* Makind Directories */
			$candidateStorage = ROOT.'public'.DS.'storage'.DS.'candidates'.DS;
			if (!is_dir($candidateStorage.$id)) {
			mkdir($candidateStorage.$id.DS);
			mkdir($candidateStorage.$id.DS.'images'.DS);
			mkdir($candidateStorage.$id.DS.'cv'.DS);
			mkdir($candidateStorage.$id.DS.'other'.DS);
			}
			if ($_FILES['candidatePhoto']['name'] != '') {
				@unlink('public'.DS.'storage'.DS.'candidates'.DS.$id.DS.'images'.DS.$candidate->image);
				$photoName = $candidateStorage.$id.DS.'images'.DS.basename($_FILES['candidatePhoto']['name']);
				move_uploaded_file($_FILES["candidatePhoto"]["tmp_name"], $photoName);
				$candidate->image = $_FILES['candidatePhoto']['name'];
			}
			if ($_FILES['candidateCV']['name'] != '') {
				@unlink('public'.DS.'storage'.DS.'candidates'.DS.$id.DS.'cv'.DS.$candidate->candidateCV);
				$cvName = $candidateStorage.$id.DS.'cv'.DS.basename($_FILES['candidateCV']['name']);
				move_uploaded_file($_FILES["candidateCV"]["tmp_name"], $cvName);
				$candidate->candidateCV = $_FILES['candidateCV']['name'];
			}
		$candidate->fill(Request::all());
		$candidate->save();
		header('location:/candidate/show/' . $candidate->id);
	}
	public function store() {
		$candidate = new Candidate;
		$validator = new Validator;
		$validation = $validator->validate($_POST + $_FILES, [
			'candidateFirstName' => 'required',
			'candidateAddress' => 'required',
			'candidatePhone' => 'required',
			'candidateLastName' => 'required',
			'candidateCity' => 'required',
			'candidateEmail' => 'required',
			'candidateGender' => 'required',
			'candidateCountry' => 'required',
			// 'candidateCV' => 'required',
			// 'candidatePhoto' => 'uploaded_file:0,500K,png,jpeg',
			'candidateBirthday' => 'required',
			'candidateCitizenship' => 'required',
			'schoolName' => 'required',
			'educationQualification' => 'required',
			'educationYear' => 'required',
			'educationCity' => 'required',
			'educationCountry' => 'required',
			'experienceWorkTill' => 'required',
			'experienceTask' => 'required',
			'experienceCompanyName' => 'required',
			'experienceCountry' => 'required',
			'experienceCity' => 'required',
			'experienceTasksPerformed' => 'required',
			'experienceWorkFrom' => 'required',
			'language' => 'required',
			'languageLevel' => 'required',
			'software' => 'required',
			'softwareKnowledgeLevel' => 'required',
			'message' => 'required',
			'candidateAgreement' => 'required',
		]);
		$validation->setAliases([
			'candidateFirstName' => 'First Name',
			'candidateAddress' => 'Address',
			'candidatePhone' => 'Phone Number',
			'candidateLastName' => 'Last Name',
			'candidateCity' => 'City',
			'candidateEmail' => 'Email',
			'candidateGender' => 'Gender',
			'candidateCountry' => 'Country',
			// 'candidateCV' => 'CV',
			// 'candidatePhoto' => 'Photo',
			'candidateBirthday' => 'Birthday',
			'candidateCitizenship' => 'Citizenship',
			'schoolName' => 'School name',
			'educationQualification' => 'Qualification',
			'educationYear' => 'Year',
			'educationCity' => 'City',
			'educationCountry' => 'Country',
			'experienceWorkTill' => 'field',
			'experienceTask' => 'field',
			'experienceCompanyName' => 'Company Name',
			'experienceCountry' => 'Country',
			'experienceCity' => 'City',
			'experienceTasksPerformed' => 'field',
			'experienceWorkFrom' => 'field',
			'language' => 'field',
			'languageLevel' => 'field',
			'software' => 'field',
			'softwareKnowledgeLevel' => 'field',
			'message' => 'field',
			'candidateAgreement' => 'field',
		]);
		$validation->validate();
		if ($validation->fails()) {
			$coll = $validation->errors();
			$col = $coll->toArray();
			$response['errors'] = $col;
			$response['statusCode'] = 201;
			$response['name'] = User::find($_SESSION['uid'])->firstName;
			echo json_encode($response);
		} else {
			$candidate = new Candidate;
			$candidate->fill(Request::all());
			$candidate->user_id = User::find($_SESSION['uid'])->id;
			$candidate->status = 'available';
			$candidate->available = 'yes';
			@$candidate->image = $_FILES['candidatePhoto']['name'];
			@$candidate->candidateCV = $_FILES['candidateCV']['name'];
			$candidate->save();
			/* Makind Directories */
			$candidateStorage = ROOT.'public'.DS.'storage'.DS.'candidates'.DS;
			mkdir($candidateStorage.$candidate->id.DS);
			mkdir($candidateStorage.$candidate->id.DS.'images'.DS);
			mkdir($candidateStorage.$candidate->id.DS.'cv'.DS);
			mkdir($candidateStorage.$candidate->id.DS.'other'.DS);
			if (isset($_FILES['candidatePhoto'])) {
				$photoName = $candidateStorage.$candidate->id.DS.'images'.DS.basename($_FILES['candidatePhoto']['name']);
				move_uploaded_file($_FILES["candidatePhoto"]["tmp_name"], $photoName);
			}
			if (isset($_FILES['candidateCV'])) {
				$cvName = $candidateStorage.$candidate->id.DS.'cv'.DS.basename($_FILES['candidateCV']['name']);
				move_uploaded_file($_FILES["candidateCV"]["tmp_name"], $cvName);
			}
			// header('Location: ' . $_SERVER['HTTP_REFERER']);
			echo json_encode(array("statusCode" => 200));
		}
	}
	public function delete($id) {
		$candidate = Candidate::find($id);
		$candidate->delete();
	}

	public function updateCV($id)
	{
		$candidate = Candidate::find($id);
		$candidateStorage = ROOT.'public'.DS.'storage'.DS.'candidates'.DS;
		if (!empty($_FILES['candidateCV'])) {
				$cvName = $candidateStorage.$id.DS.'cv'.DS.basename($_FILES['candidateCV']['name']);
				$candidate->candidateCV = $_FILES['candidateCV']['name'];
				move_uploaded_file($_FILES["candidateCV"]["tmp_name"], $cvName);
			}
		$candidate->save();
		header('location:/candidate/show/' . $candidate->id);
	}

	public function updateImage($id)
	{
		$candidate = Candidate::find($id);
		$candidateStorage = ROOT.'public'.DS.'storage'.DS.'candidates'.DS;
		if (!empty($_FILES['candidatePhoto'])) {
				$candidateImage = $candidateStorage.$id.DS.'images'.DS.basename($_FILES['candidatePhoto']['name']);
				$candidate->image = $_FILES['candidatePhoto']['name'];
				move_uploaded_file($_FILES["candidatePhoto"]["tmp_name"], $candidateImage);
			}
		$candidate->save();
		header('location:/candidate/show/' . $candidate->id);
	}
}