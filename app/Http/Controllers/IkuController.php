<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mission;
use App\Tujuan;
use App\Sasaran;
use App\Indikator;

class IkuController extends Controller
{
    public function index()
    {
    	$data = Mission::all();
    	foreach ($data as $missions) {
    		$missions->tujuans_count = count($missions->tujuans); 
    		foreach($missions->tujuans as $tujuans) {
	    		$missions->sasarans_count = count($tujuans->sasarans);
				foreach($tujuans->sasarans as $sasarans) {
	   				$missions->indikators_count = count($sasarans->indikators);
				}					// foreach($sasarans->indikators as $indikators)
    		}
    		$missions->rowspan = max($missions->tujuans_count, $missions->sasarans_count, $missions->indikators_count);
    	}
    	 
        return view('iku', compact('data'));
    }

    public function storeMission(Request $request) {
    	Mission::create($request->only('mission'));
    }

    public function storeTujuan(Request $request) {
    	Tujuan::create($request->only(['tujuan', 'mission_id']));
    }

    public function storeSasaran(Request $request) {
    	Sasaran::create($request->only(['sasaran', 'tujuan_id']));
    }

    public function storeIndikator(Request $request) {
    	Indikator::create($request->only(['sasaran_id', 'indikator', 'kondisi_awal', 'kondisi_akhir', 'tahun_2017', 'tahun_2018', 'tahun_2019', 'tahun_2020', 'tahun_2021']));
    }

    private function refresh() {
    	return redirect()->route('iku.index');
    }
}
