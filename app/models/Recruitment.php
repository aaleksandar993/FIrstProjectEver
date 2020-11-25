<?php

namespace app\models;

use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Model;
use app\models\Candidate;
use app\models\Company;
use app\models\Job;
use app\models\User;

class Recruitment extends Model {
	// protected $with = [''];
	protected $table = 'recruitments';

	protected $fillable = [
		'status',
		'user_id',
		'job_id',
		'company_id',
		'candidate_id',
	];

	/**
	 * Get the jobs for the company.
	 */

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function candidates() {
		return $this->hasMany(Candidate::class);
	}

	public function company() {
		return $this->hasMany(Company::class);
	}

	public function jobs() {
		return $this->hasMany(Job::class);
	}

}