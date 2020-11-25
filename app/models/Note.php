<?php

namespace app\models;

use app\models\Company;
use app\models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Model;

class Note extends Model {

	use SoftDeletes;

	protected $with = ['user'];
	protected $table = 'notes';

	protected $fillable = [
		'note',
		'user_id',
		'job_id',
		'company_id',
		'candidate_id',
		'contact_id',
	];

	/**
	 * Get the jobs for the company.
	 */

	public function user() {
		return $this->belongsTo(User::class);
	}

}