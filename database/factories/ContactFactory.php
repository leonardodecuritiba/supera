<?php

use Faker\Generator as Faker;

$factory->define( App\Models\Commons\Contact::class, function ( Faker $faker ) {
	$emails = $faker->freeEmail . ';' . $faker->freeEmail . ';' . $faker->freeEmail;

	return [
		'emails' => $emails
	];
} );
