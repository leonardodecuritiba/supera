<?php

namespace App\Models\Commons;

use App\Models\Patients\Patient;
use App\Models\Patients\Relative;
use App\Traits\Configurations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model {
	use SoftDeletes;
	use Configurations;
	public $timestamps = true;
	protected $fillable = [
		'emails'
	];


	public function getEmailsEncode() {
		$emails = $this->attributes['emails'];
		if ( ( $emails == null ) || ( $emails == '' ) ) {
			return null;
		}

		return json_encode( explode( ';', $emails ) );
	}
	
	/*
	|--------------------------------------------------------------------------
	| Relashionships
	|--------------------------------------------------------------------------
	 */
	public function patient() {
		return $this->belongsTo( Patient::class );
	}

	public function relative() {
		return $this->belongsTo( Relative::class );
	}
}
