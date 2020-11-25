<?php

namespace app\controllers;

use Rakit\Validation\Validator;
use app\core\Controller;
use app\core\Request;
use app\models\Company;
use app\models\Contact;
use app\models\User;

class CompanyController extends Controller {

	public function index() {

		$companies = Company::all()->sortBy('id');
		$this->view->render('company/index', compact('companies'));
	}
	
	public function create() {
		$this->view->render('company/create');
	}

	public function show($id = 0) {
		if (!is_null(Company::find($id))) {
			$company = Company::find($id);
			if (!is_null($company)) {
				$this->view->render('company/show', compact('company'));
			} else {
				$this->view->render('error/404');
			}
		} else {
			$this->view->render('error/401');
		}
	}

	public function store() {
		// echo json_encode(Request::all());
		$company = new Company;
		$contact = new Contact;
		$validator = new Validator;
		$validation = $validator->validate($_POST + $_FILES, [
			'companyName' => 'required',
			'companyAddress' => 'required',
			'companyIndustry' => 'required',
			'companyPhone' => 'required',
			'companyCountry' => 'required',
			'companyWebsite' => 'required',
			'companyCity' => 'required',
			'companySize' => 'required',
		]);
		$validation->setAliases([
			'companyName' => 'Company Name',
			'companyAddress' => 'Company Address',
			'companyIndustry' => 'Company Industry',
			'companyPhone' => 'Company Phone',
			'companyCountry' => 'Company Country',
			'companyWebsite' => 'Company website',
			'companyCity' => 'Company City',
			'companySize' => 'Company Size',
			'companyAbout' => 'Company Information',
		]);
		$validation->validate();
		if ($validation->fails()) {
			$coll = $validation->errors();
			$col = $coll->toArray();
			$col['statusCode'] = 201;
			$col['name'] = User::find($_SESSION['uid'])->username;
			echo json_encode($col);
		} else {
			$company->fill(Request::all());
			$company->user_id = $_SESSION['uid'];
			$company->save();
			$contact->company_id = $company->id;
			$contact->name = htmlspecialchars($_POST['referent']);
		$contact->phone = htmlspecialchars($_POST['referentPhone']);
			$contact->email = htmlspecialchars($_POST['referentEmail']);
			$contact->role = htmlspecialchars($_POST['referentRole']);
			$contact->user_id = $_SESSION['uid'];
			$contact->save();
			mkdir(ROOT.'public'.DS.'storage'.DS.'companies'.DS.$company->id.DS);
			echo json_encode(array("statusCode" => 200));
		}
	}

	public function update($id) {
		$company = Company::find($id);
		$company->companyName = htmlspecialchars($_POST['companyName']);
		$company->companyAddress = htmlspecialchars($_POST['companyAddress']);
		$company->companyIndustry = htmlspecialchars($_POST['companyIndustry']);
		$company->companyPhone = htmlspecialchars($_POST['companyPhone']);
		$company->companyCountry = htmlspecialchars($_POST['companyCountry']);
		$company->companyCity = htmlspecialchars($_POST['companyCity']);
		$company->companyWebsite = htmlspecialchars($_POST['companyWebsite']);
		$company->companySize = htmlspecialchars($_POST['companySize']);
		$company->companyAbout = htmlspecialchars($_POST['companyAbout']);
		$company->save();
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}