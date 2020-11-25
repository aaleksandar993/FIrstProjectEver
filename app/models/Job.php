<?php

namespace app\models;

use app\models\Candidate;
use app\models\Company;
use app\models\User;
use \Illuminate\Database\Eloquent\Model;

class Job extends Model {

	protected $table = 'jobs';

	protected $fillable = [
		'requiredProfession',
		'openings',
		'placeOfWork',
		'salary',
		'workingHours',
		'avaliableNow',
		'jobDescription',
		'availabilityDate',
		'shifts',
		'accomodations',
		'accomodationsPays',
		'accomodationsCosts',
		'corporateInsertion',
		'contractDetails',
		'fixedTerm',
		'partTime',
		'additionalJobInformation',
		'candidateQualification',
		'candidateAge',
		'candidateEducation',
		'candidateWorkExperience',
		'language',
		'candidateOtherLanguage',
		'candidateComputerSkills',
		'candidateDrivingLicence',
		'candidateMeansOfTransport',
		'descriptionOfStaffRequest',
		'status',
	];

	/**
	 * Get the jobs for the company.
	 */

	public function company() {
		return $this->belongsTo(Company::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function candidates() {
		return $this->belongsToMany(Candidate::class, 'recruitments');
	}

	public function candidate() {
		return $this->belongsTo(Candidate::class,'recruitments');
	}

	public function notes() {
		return $this->hasMany(Note::class)->orderBy('id', 'DESC');
	}

	public function files() {
		return $this->hasMany(File::class);
	}

}