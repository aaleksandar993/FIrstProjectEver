<?php

namespace app\models;

use app\models\Note;
use app\models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Model;

class Candidate extends Model {

	use SoftDeletes;

	protected $table = 'candidates';
	protected $softDelete = true;

	protected $fillable = [
		'candidateFirstName',
		'candidateAddress',
		'candidatePhone',
		'candidateLastName',
		'candidateCity',
		'candidateEmail',
		'candidateGender',
		'candidateCountry',
		'candidateBirthday',
		'candidatePhoto',
		'candidateCV',
		'candidateCitizenship',
		'schoolName',
		'educationQualification',
		'educationYear',
		'educationCity',
		'educationCountry',
		'professionalSkills',
		'professionalSkillsLevel',
		'experienceWorkTill',
		'experienceTask',
		'experienceCompanyName',
		'experienceCountry',
		'experienceCity',
		'experienceTasksPerformed',
		'experienceWorkFrom',
		'language',
		'languageLevel',
		'software',
		'softwareKnowledgeLevel',
		'message',
		'candidateAgreement',
		'candidateDrivingLicence',
		'available',
		'availableFrom',
		'candidateAgreement',
		'status',
		'user_id',
		'company_id',
	];

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function notes() {
		return $this->hasMany(Note::class);
	}

	public function jobs() {
		return $this->belongsToMany(Job::class, 'recruitments');
	}

	public function company() {
		return $this->belongsToMany(Company::class);
	}
}