<?php

namespace app\models;

use app\models\Candidate;
use app\models\Company;
use app\models\Contact;
use app\models\Job;
use app\models\Note;
use app\models\Recruitment;
use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Model;

class User extends Model {

	use SoftDeletes;

	protected $table = 'users';
	protected $softDelete = true;

	protected $fillable = ['firstName', 'surname', 'password', 'email', 'username'];

	public static function isAdmin($id) {

		$user = User::find($id);

		if ($user->role != 'admin') {

			return false;

		} else {

			return true;

		}
	}

	public function jobs() {
		return $this->hasMany(Job::class);
	}

	public function companies() {
		return $this->hasMany(Company::class);
	}

	public function contacts() {
		return $this->hasMany(Contact::class);
	}

	public function notes() {
		return $this->hasMany(Note::class);
	}

	public function candidates() {
		return $this->hasMany(Candidate::class);
	}

	public function recruitments() {
		return $this->hasMany(Recruitment::class);
	}
}