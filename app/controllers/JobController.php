<?php
namespace app\controllers;
use Rakit\Validation\Validator;
use app\core\Controller;
use app\core\Request;
use app\models\Company;
use app\models\Contact;
use app\models\Job;
use app\models\User;

class JobController extends Controller {

	public function index() {
		$jobs = Job::all();
		$this->view->render('job/index', compact('jobs'));
	}

	public function create() {
		$this->view->render('job/create');
	}

	public function show($id) {
		if ($id) {
			$job = Job::find($id);
			if (!is_null($job)) {
				$this->view->render('job/show', compact('job'));
			} else {
				$this->view->render('error/404');
			}
		} else {
			$this->view->render('error/401');
		}
	}

	public function store() {
		//die(var_dump(Request::all()));
		/* Store job in database */
		$validator = new Validator;
		$validation = $validator->validate($_POST + $_FILES, [
			// 'companyName' => 'required',
			// 'companyIndustry' => 'required',
			// 'companyCountry' => 'required',
			// 'companyCity' => 'required',
			// 'companyAddress' => 'required',
			// 'companyPhone' => 'required',
			// 'companyWebsite' => 'required',
			// 'companySize' => 'required',
			// 'referant' => 'required',
			// 'referantRole' => 'required',
			// 'referantPhone' => 'required',
			// 'referantEmail' => 'required',
			// 'aboutCompany' => 'required',
			'requiredProfession' => 'required',
			'openings' => 'required',
			'placeOfWork' => 'required',
			'salary' => 'required',
			'workingHours' => 'required',
			'avaliableNow' => 'required',
			'jobDescription' => 'required',
			// 'availabilityDate' => 'required',
			'shifts' => 'required',
			// 'accomodations' => 'required',
			// 'accomodationsPays' => 'required',
			// 'accomodationsCosts' => 'required',
			'corporateInsertion' => 'required',
			'contractDetails' => 'required',
			//'fixedTerm' => 'required',
			//'partTime' => 'required',
			'additionalJobInformation' => 'required',
			'candidateQualification' => 'required',
			// 'candidateAge' => 'required',
			'candidateEducation' => 'required',
			'candidateWorkExperience' => 'required',
			'language' => 'required',
			// 'candidateOtherLanguage' => 'required',
			// 'candidateComputerSkills' => 'required',
			// 'candidateDrivingLicence' => 'required',$(this).serialize()
			// 'candidateMeansOfTransport' => 'required',
			// 'descriptionOfStaffRequest' => 'required',
		]);
		$validation->setAliases([
		]);
		$validation->validate();
		if ($validation->fails()) {
			$coll = $validation->errors();
			$col = $coll->toArray();
			$col['name'] = User::find($_SESSION['uid'])->firstName;
			$col['statusCode'] = 201;
			echo json_encode(array("statusCode" => 201));
		} else {
			$job = new Job;
			// $company = new Company;
			// $contact = new Contact;
			// $company->fill(Request::all());
			// $company->user_id = $_SESSION['uid'];
			// $company->save();
			// $contact->name = $_POST['referant'];
			// $contact->phone = $_POST['referantPhone'];
			// $contact->email = $_POST['referantEmail'];
			// $contact->role = $_POST['referantRole'];
			// $contact->company_id = $company->id;
			// $contact->user_id = $_SESSION['uid'];
			// $contact->save();
			$job->fill(Request::all());
			$job->user_id = User::find($_SESSION['uid'])->id;
			$job->company_id = $_POST['company_id'];
			$job->save();
			// mkdir(ROOT.'public'.DS.'storage'.DS.'jobs'.$job->id.DS);
			echo json_encode(array("statusCode" => 200));
			//header('location:/job/show/' . $job->id);
		}
	}
	
	public function storeAll()
	{
			$validator = new Validator;
			$validation = $validator->validate($_POST + $_FILES, [
			// 'companyName' => 'required',
			// 'companyIndustry' => 'required',
			// 'companyCountry' => 'required',
			// 'companyCity' => 'required',
			// 'companyAddress' => 'required',
			// 'companyPhone' => 'required',
			// 'companyWebsite' => 'required',
			// 'companySize' => 'required',
			// 'referant' => 'required',
			// 'referantRole' => 'required',
			// 'referantPhone' => 'required',
			// 'referantEmail' => 'required',
			// 'aboutCompany' => 'required',
			'requiredProfession' => 'required',
			'openings' => 'required',
			'placeOfWork' => 'required',
			'salary' => 'required',
			'workingHours' => 'required',
			'avaliableNow' => 'required',
			'jobDescription' => 'required',
			// 'availabilityDate' => 'required',
			'shifts' => 'required',
			// 'accomodations' => 'required',
			// 'accomodationsPays' => 'required',
			// 'accomodationsCosts' => 'required',
			'corporateInsertion' => 'required',
			'contractDetails' => 'required',
			//'fixedTerm' => 'required',
			//'partTime' => 'required',
			'additionalJobInformation' => 'required',
			'candidateQualification' => 'required',
			// 'candidateAge' => 'required',
			'candidateEducation' => 'required',
			'candidateWorkExperience' => 'required',
			'language' => 'required',
			// 'candidateOtherLanguage' => 'required',
			// 'candidateComputerSkills' => 'required',
			// 'candidateDrivingLicence' => 'required',$(this).serialize()
			// 'candidateMeansOfTransport' => 'required',
			// 'descriptionOfStaffRequest' => 'required',
		]);
		$validation->setAliases([
		]);
		$validation->validate();
		if ($validation->fails()) {
			$coll = $validation->errors();
			$col = $coll->toArray();
			$col['name'] = User::find($_SESSION['uid'])->firstName;
			$col['statusCode'] = 201;
			echo json_encode(array("statusCode" => 201));
		} else {
			
			$job = new Job;
			$company = new Company;
			$contact = new Contact;
			$company->fill(Request::all());
			$company->user_id = $_SESSION['uid'];
			$company->save();
			$contact->name = $_POST['referant'];
			$contact->phone = $_POST['referantPhone'];
			$contact->email = $_POST['referantEmail'];
			$contact->role = $_POST['referantRole'];
			$contact->company_id = $company->id;
			$contact->user_id = $_SESSION['uid'];
			$contact->save();
			$job->fill(Request::all());
			$job->user_id = User::find($_SESSION['uid'])->id;
			$job->company_id = $company->id;
			$job->save();
			echo json_encode(array("statusCode" => 200));
		}
	}

	public function update($id){
		$job = Job::find($id);
		$job->fill(Request::all());
		$job->save();
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	
	public function statusUpdate() {
		$job = Job::find($_POST['job_id']);
		$job->status = $_POST['status'];
		$job->save();
		echo json_encode(array("statusCode" => 200, "status" => ucwords($job->status), "id" => 'job'.$job->id));
	}
}