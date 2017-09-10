<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Address Factories
|--------------------------------------------------------------------------
 */
$factory->define( \App\Models\Commons\Address::class, function ( Faker $faker ) {
	$state = $faker->numberBetween( $min = 1, $max = 27 );
	$city  = $faker->numberBetween( $min = 1, $max = 10000 );

	return [
		'state_id'   => $state,
		'city_id'    => $city,
		'zip'        => $faker->randomNumber( $nbDigits = 8 ),
		'district'   => $faker->streetName,
		'street'     => $faker->streetName,
		'number'     => $faker->randomNumber( $nbDigits = 4 ),
		'complement' => $faker->word
	];
} );