<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MagangController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_magang = \App\Magang::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_magang = \App\Magang::all();
        }
    	
    	return view('magang.index',['data_magang' => $data_magang]);
    }

    public function create(Request $request)
    {
    	\App\Magang::create($request->all());
    	return redirect('/magang')->with('sukses','Data Berhasil Diinput !');
	}
    public function edit($id)
    {
        $magang = \App\Magang::find($id);
        return view('magang/edit',['magang' => $magang]);
    }
    public function update(Request $request,$id)
    {
        $magang = \App\Magang::find($id);
        $magang->update($request->all());
        if ($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $magang->avatar = $request->file('avatar')->getClientOriginalName();
            $magang->save();
        }
        return redirect('/magang')->with('sukses','Data Berhasil Diupdate !');
    }
    public function delete($id)
    {
        $magang = \App\Magang::find($id);
        $magang->delete($magang);
        return redirect('/magang')->with('sukses','Data Berhasil Dihapus !');
    }
    public function profile($id)
    {
        $magang = \App\Magang::find($id);
        
        return view('magang.profile',['magang' => $magang]);
    }

   

}
