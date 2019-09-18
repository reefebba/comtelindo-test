<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sasaran;
// use App\Tujuan;
use Faker\Generator as Faker;

$factory->define(Sasaran::class, function (Faker $faker) {
	// $tujuan = factory(Tujuan::class)->create();
    return [
    	'tujuan_id' => rand(1,7), // $tujuan->id,
        'sasaran' => $faker->sentence(),
    ];
});
