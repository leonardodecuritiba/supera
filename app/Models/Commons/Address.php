<?php

namespace App\Models\Commons;

use App\Models\Patients\Patient;
use App\Models\Patients\Relative;
use App\Traits\Configurations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model {
	use SoftDeletes;
	use Configurations;
	public $timestamps = true;
	protected $fillable = [
		'state_id',
		'city_id',
		'type',
		'zip',
		'idstate',
		'district',
		'street',
		'number',
		'complement'
	];


	/*
	|--------------------------------------------------------------------------
	| Relashionships
	|--------------------------------------------------------------------------
	 */
	public function patient() {
		return $this->hasOne( Patient::class );
	}

	public function relative() {
		return $this->hasOne( Relative::class );
	}
}
