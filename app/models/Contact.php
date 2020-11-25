<?php

namespace app\models;

use app\models\Company;
use app\models\Note;
use app\models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Model;

class Contact extends Model {

	use SoftDeletes;

	protected $with = ['company'];
	protected $table = 'contacts';

	protected $fillable = [
		'name',
		'role',
		'email',
		'phone',
		'instagram',
		'facebook',
		'linkedIn',
		'company_id',
		'user_id',
	];

	/**
	 * Get the jobs for the company.
	 */

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function company() {
		return $this->belongsTo(Company::class);
	}

	public function notes() {
		return $this->hasMany(Note::class);
	}

}