<?php

namespace app\models;

use app\models\Contact;
use app\models\Job;
use app\models\Note;
use app\models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Model;

class Company extends Model {

	use SoftDeletes;

	protected $table = 'companies';
	protected $softDelete = true;

	protected $fillable = [
		'companyName',
		'companyAddress',
		'companyIndustry',
		'companyPhone',
		'companyCountry',
		'companyWebsite',
		'companyCity',
		'companySize',
		'companyAbout',
		'user_id',
		'job_id',
		'candidate_id',
	];

	/**
	 * Get the jobs for the company.
	 */
	public function jobs() {
		return $this->hasMany(Job::class)->orderBy('id', 'DESC');
	}

	public function candidates() {
		return $this->belongsToMany(Candidate::class, 'recruitments');
	}

	public function candidate() {
		return $this->belongsTo(Candidate::class);
	}

	public function notes() {
		return $this->hasMany(Note::class);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function contact() {
		return $this->hasMany(Contact::class);
	}

}