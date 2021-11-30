<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ModelConfig;
use Illuminate\Http\Request;
use App\Magang;
use App\Pembimbing;
use App\Divisi;
use App\Kampus;
use App\Sekolah;

class DashboardController extends Controller
{
    public function index()
    {	
    	$jumlah_magang = \App\Magang::all()->count();
    	// $jumlah_pembimbing = \App\Pembimbing::all()->count();


    	return view('dashboards.index')->with('jumlah_magang', $jumlah_magang);
    	// return view('dashboards.index')->with('jumlah_pembimbing', $jumlah_pembimbing);
    	// // return view('dashboards.index')->with('jumlah_divisi', $jumlah_divisi);
    	// // return view('dashboards.index')->with('jumlah_kampus', $jumlah_kampus);
    	// // return view('dashboards.index')->with('jumlah_sekolah', $jumlah_sekolah);
    	return view('dashboards.index');
    }

   
}
