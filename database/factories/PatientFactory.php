<?php

use Faker\Generator as Faker;

$factory->define( App\Models\Patients\Patient::class, function ( Faker $faker ) {
	return [
		'contact_id' => function () {
			return factory( \App\Models\Commons\Contact::class )->create()->id;
		},
		'address_id' => function () {
			return factory( \App\Models\Commons\Address::class )->create()->id;
		},
		'name'       => $faker->name,
		'cpf'        => $faker->cpf( false ),
		'rg'         => $faker->rg( false ),
		'sex'        => $faker->boolean,
		'birthday'   => $faker->date( $format = 'd/m/Y', $max = 'now' ),
	];
} );
