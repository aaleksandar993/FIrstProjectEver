<?php

namespace app\models;

use \Illuminate\Database\Eloquent\Model;

class File extends Model {


	protected $with = ['user'];
	protected $table = 'files';

	protected $fillable = [
		'user_id',
		'name',
	];

	public function user() {
		return $this->belongsTo(User::class);
	}

}