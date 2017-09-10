<?php

namespace App\Models\Commons;

use App\Models\Configs\CepCities;
use App\Models\Configs\CepStates;
use App\Models\Patients\Patient;
use App\Models\Patients\Relative;
use App\Traits\AddressTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model {
	use SoftDeletes;
	use AddressTrait;
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

	public function state() {
		return $this->belongsTo( CepStates::class );
	}

	public function city() {
		return $this->belongsTo( CepCities::class );
	}

	public function relative() {
		return $this->hasOne( Relative::class );
	}
}
