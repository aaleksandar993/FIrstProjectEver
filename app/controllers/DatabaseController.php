<?php
namespace app\controllers;
use app\core\Controller;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\Schema;


class DatabaseController extends Controller {

	public function updateTable() {
		Capsule::schema()->table('contacts', function ($table) {
			$table->string('instagram')->nullable();
			$table->string('facebook')->nullable();
			$table->string('linkedIn')->nullable();
		});
	}

	public function files(){
		if (!Capsule::schema()->hasTable('files')) {
			Capsule::schema()->create('files', function ($table) {
				$table->increments('id');
				$table->unsignedInteger('user_id')->nullable()->default(NULL);
				$table->string('name')->nullable()->default(NULL);
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}

	public function notes() {
		if (!Capsule::schema()->hasTable('notes')) {
			Capsule::schema()->create('notes', function ($table) {
				$table->increments('id');
				$table->unsignedInteger('candidate_id')->nullable()->default(NULL);
				$table->unsignedInteger('company_id')->nullable()->default(NULL);
				$table->unsignedInteger('user_id')->nullable()->default(NULL);
				$table->unsignedInteger('contact_id')->nullable()->default(NULL);
				$table->unsignedInteger('job_id')->nullable()->default(NULL);
				$table->longText('note')->nullable();
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}

	public function contacts() {
		if (!Capsule::schema()->hasTable('contacts')) {
			Capsule::schema()->create('contacts', function ($table) {
				$table->increments('id');
				$table->unsignedInteger('company_id');
				$table->unsignedInteger('user_id');
				$table->string('name')->nullable();
				$table->string('email')->nullable();
				$table->string('phone')->nullable();
				$table->string('role')->nullable();
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}

	public function recruitments() {
		if (!Capsule::schema()->hasTable('recruitments')) {
			Capsule::schema()->create('recruitments', function ($table) {
				$table->increments('id');
				$table->unsignedInteger('candidate_id')->nullable();
				$table->unsignedInteger('company_id')->nullable();
				$table->unsignedInteger('job_id')->nullable();
				$table->unsignedInteger('user_id')->nullable();
				$table->string('status')->nullable()->default(NULL);
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}

	public function candidates() {
		if (!Capsule::schema()->hasTable('candidates')) {
			Capsule::schema()->create('candidates', function ($table) {
				$table->increments('id');
				$table->unsignedInteger('user_id')->nullable();
				$table->unsignedInteger('job_id')->nullable();
				$table->unsignedInteger('company_id')->nullable();
				$table->string('candidateFirstName')->nullable();
				$table->string('candidateAddress')->nullable();
				$table->string('candidatePhone')->nullable();
				$table->string('candidateLastName')->nullable();
				$table->string('candidateCity')->nullable();
				$table->string('candidateEmail')->nullable();
				$table->string('candidateGender')->nullable();
				$table->string('candidateCountry')->nullable();
				$table->string('candidateBirthday')->nullable();
				$table->string('candidateCitizenship')->nullable();
				$table->string('schoolName')->nullable();
				$table->string('educationQualification')->nullable();
				$table->string('educationYear')->nullable();
				$table->string('educationCity')->nullable();
				$table->string('educationCountry')->nullable();
				$table->string('profesionalSkills')->nullable();
				$table->string('experienceWorkTill')->nullable();
				$table->string('experienceTask')->nullable();
				$table->string('experienceCountry')->nullable();
				$table->string('experienceCity')->nullable();
				$table->string('experienceCompanyName')->nullable();
				$table->string('experienceTasksPerformed')->nullable();
				$table->string('experienceWorkFrom')->nullable();
				$table->string('language')->nullable();
				$table->string('languageLevel')->nullable();
				$table->string('software')->nullable();
				$table->string('softwareKnowledgeLevel')->nullable();
				$table->longText('message')->nullable();
				$table->string('candidateDrivingLicence')->nullable();
				$table->string('candidateMeansOfTransport')->nullable();
				$table->string('available')->nullable();
				$table->string('availableFrom')->nullable();
				$table->string('role')->default('candidate');
				$table->string('cv')->default(NULL);
				$table->string('status')->nullable();
				$table->string('candidateAgreement')->nullable();
				$table->string('candidateCV')->nullable();
				$table->string('image')->nullable();
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}

	public function users() {
		if (!Capsule::schema()->hasTable('users')) {
			Capsule::schema()->create('users', function ($table) {
				$table->increments('id');
				$table->string('firstName');
				$table->string('surname');
				$table->string('email');
				$table->string('password');
				$table->string('username');
				$table->string('role')->default('user');
				$table->rememberToken();
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}
	public function jobs() {
		if (!Capsule::schema()->hasTable('jobs')) {
			Capsule::schema()->create('jobs', function ($table) {
				$table->increments('id');
				$table->integer('company_id')->nullable();
				$table->integer('user_id')->nullable();
				$table->integer('candidate_id')->nullable();
				$table->string('requiredProfession')->nullable();
				$table->string('openings')->nullable();
				$table->string('placeOfWork')->nullable();
				$table->string('salary')->nullable();
				$table->string('workingHours')->nullable();
				$table->string('avaliableNow')->nullable();
				$table->longText('jobDescription')->nullable();
				$table->string('availabilityDate')->nullable();
				$table->string('shifts')->nullable();
				$table->string('accomodations')->nullable();
				$table->string('accomodationsPays')->nullable();
				$table->string('accomodationsCosts')->nullable();
				$table->string('corporateInsertion')->nullable();
				$table->longText('contractDetails')->nullable();
				$table->string('fixedTerm')->nullable();
				$table->string('partTime')->nullable();
				$table->string('additionalJobInformation')->nullable();
				$table->string('candidateQualification')->nullable();
				$table->string('candidateAge')->nullable();
				$table->string('candidateEducation')->nullable();
				$table->string('candidateWorkExperience')->nullable();
				$table->string('language')->nullable();
				$table->string('candidateOtherLanguage')->nullable();
				$table->string('candidateComputerSkills')->nullable();
				$table->string('candidateDrivingLicence')->nullable();
				$table->string('candidateMeansOfTransport')->nullable();
				$table->longText('descriptionOfStaffRequest')->nullable();
				$table->string('status')->default('open')->nullable();
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}
	public function companies() {
		if (!Capsule::schema()->hasTable('companies')) {
			Capsule::schema()->create('companies', function ($table) {
				$table->increments('id');
				$table->string('companyName');
				$table->string('companyAddress')->nullable();
				$table->string('companyIndustry')->nullable();
				$table->string('companyPhone')->nullable();
				$table->string('companyCountry')->nullable();
				$table->string('companyWebsite')->nullable();
				$table->string('companyCity')->nullable();
				$table->string('companySize')->nullable();
				$table->longText('companyAbout')->nullable();
				$table->unsignedInteger('candidate_id')->nullable();
				$table->unsignedInteger('job_id')->nullable();
				$table->unsignedInteger('user_id')->nullable();
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}
}