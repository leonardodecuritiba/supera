<?php

namespace App\Models\Commons;

use App\Models\Configs\PhoneType;
use App\Traits\AddressTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model {
	use SoftDeletes;
	use AddressTrait;
	public $timestamps = true;
	protected $fillable = [
		'contact_id',
		'phonetype_id',
		'number',
		'cellphone'
	];

	/*
	|--------------------------------------------------------------------------
	| Relashionships
	|--------------------------------------------------------------------------
	 */
	public function contact() {
		return $this->belongsTo( Contact::class );
	}

	public function phone_type() {
		return $this->belongsTo( PhoneType::class );
	}
}
