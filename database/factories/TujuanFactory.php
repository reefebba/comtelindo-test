<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tujuan;
// use App\Mission;
use Faker\Generator as Faker;

$factory->define(Tujuan::class, function (Faker $faker) {
	// $mission = factory(Mission::class)->create();
    return [
    	'mission_id' => rand(1,5), // $mission->id,
        'tujuan' => $faker->sentence(),
    ];
});
