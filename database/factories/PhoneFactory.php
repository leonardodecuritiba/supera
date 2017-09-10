<?php

use Faker\Generator as Faker;

$factory->define( App\Models\Commons\Phone::class, function ( Faker $faker ) {
	return [
		'contact_id'   => $faker->numberBetween( $min = 1, $max = 30 ),
		'phonetype_id' => $faker->numberBetween( $min = 1, $max = 3 ),
		'number'       => $faker->areaCode() . $faker->landline( false ),
		'cellphone'    => $faker->boolean(),
	];
} );
