<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Indikator;
// use App\Sasaran;
use Faker\Generator as Faker;

$factory->define(Indikator::class, function (Faker $faker) {
    // $sasaran = factory(Sasaran::class)->create();
    return [
    	'sasaran_id' => rand(1,9), // $sasaran->id, 
    	'indikator' => $faker->sentence(),
    	'kondisi_awal' => $faker->randomFloat($nbMaxDecimals = 2, $min = 60, $max = 99),
    	'kondisi_akhir' => $faker->randomFloat($nbMaxDecimals = 2, $min = 60, $max = 99),
    	'tahun_2017' => $faker->randomFloat($nbMaxDecimals = 2, $min = 60, $max = 99),
    	'tahun_2018' => $faker->randomFloat($nbMaxDecimals = 2, $min = 60, $max = 99),
    	'tahun_2019' => $faker->randomFloat($nbMaxDecimals = 2, $min = 60, $max = 99),
    	'tahun_2020' => $faker->randomFloat($nbMaxDecimals = 2, $min = 60, $max = 99),
    	'tahun_2021' => $faker->randomFloat($nbMaxDecimals = 2, $min = 60, $max = 99)
        //
    ];
});
