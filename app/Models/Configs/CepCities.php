<?php

namespace App\Models\Configs;

use App\Traits\Configurations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CepCities extends Model {
	use SoftDeletes;
	use Configurations;
	public $timestamps = true;
	protected $fillable = [
		'name',
		'short_name',
	];

	static public function getAlltoSelectList( array $fields = [ 'id', 'description' ] ) {
		return self::get()->map( function ( $s ) use ( $fields ) {
			return [
				'id'          => $s->{$fields[0]},
				'description' => $s->{$fields[1]}
			];
		} )->pluck( 'description', 'id' );
	}
}
