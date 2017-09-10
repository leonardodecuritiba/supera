<?php

namespace App\Models\Patients;

use App\Models\Commons\Address;
use App\Models\Commons\Contact;
use App\Traits\Configurations;
use App\Traits\NaturalPerson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model {
	use SoftDeletes;
	use NaturalPerson;
	public $timestamps = true;
	protected $fillable = [
		'contact_id',
		'address_id',
		'name',
		'cpf',
		'rg',
		'sex',
		'birthday'
	];

	/*
	|--------------------------------------------------------------------------
	| Relashionships
	|--------------------------------------------------------------------------
	 */
	public function address() {
		return $this->belongsTo( Address::class );
	}

	public function contact() {
		return $this->belongsTo( Contact::class );
	}

}
