<?php

namespace App\Traits;

use App\Helpers\DataHelper;

trait Configurations {
	static public function getAlltoSelectList( array $fields = [ 'id', 'description' ] ) {
		return self::get()->map( function ( $s ) use ( $fields ) {
			return [
				'id'          => $s->{$fields[0]},
				'description' => $s->{$fields[1]}
			];
		} )->pluck( 'description', 'id' );
	}

	public function getCreatedAtAttribute( $value ) {
		return DataHelper::getPrettyDateTime( $value );
	}


}