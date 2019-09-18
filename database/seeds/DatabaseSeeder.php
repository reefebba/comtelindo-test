<?php

use Illuminate\Database\Seeder;
use App\Mission;
use App\Tujuan;
use App\Sasaran;
use App\Indikator;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Mission::class, 5)->create();
        factory(App\Tujuan::class, 7)->create();
        factory(App\Sasaran::class,9)->create();
        factory(App\Indikator::class, 12)->create();
     
     //    $sasaran = new Sasaran;
     //    $sasaran->tujuan_id = 4;
     //    $sasaran->sasaran = 'new';
     //    $sasaran->save();

     //    $indikator = new Indikator;
     //    $indikator->sasaran_id = $sasaran->id;
     //    $indikator->indikator = 'new';
     //    $indikator->kondisi_awal = 90;
    	// $indikator->kondisi_akhir = 90;
    	// $indikator->tahun_2017 = 90;
    	// $indikator->tahun_2018 = 90;
    	// $indikator->tahun_2019 = 90;
    	// $indikator->tahun_2020 = 90;
    	// $indikator->tahun_2021 = 90;
    	// $indikator->save();
    }
}
