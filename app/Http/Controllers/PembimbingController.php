<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    public function index(){

    	$data_pembimbing = \App\Pembimbing::all();
    	return view('pembimbing.index',['data_pembimbing' => $data_pembimbing]);
    }

    public function create(Request $request){

    	 \App\Pembimbing::create($request->all());
    	 return redirect('/pembimbing');
    }

    public function edit($id){

    	$pembimbing = \App\Pembimbing::find($id);
    	return view('pembimbing/edit',['pembimbing' => $pembimbing] );

    }

     public function update(Request $request, $id){

     	$pembimbing = \App\Pembimbing::find($id);
     	$pembimbing->update($request->all());
       if ($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $pembimbing->avatar = $request->file('avatar')->getClientOriginalName();
            $pembimbing->save();
        }
     	return redirect('/pembimbing')->with('sukses','Data Berhasil Diupdate !');
    	 
    }

      public function delete($id) {

        $pembimbing = \App\Pembimbing::find($id);
        $pembimbing->delete($pembimbing);
        return redirect('/pembimbing')->with('sukses','Data Berhasil Dihapus !');
    }

      public function profile($id) {

        $pembimbing = \App\Pembimbing::find($id);
        $magangpembimbing = \App\Magang::all();
        return view('pembimbing.profile',['pembimbing' => $pembimbing, 'magangpembimbing' => $magangpembimbing]);
    }
}
