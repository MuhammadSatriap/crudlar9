<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index(){
        $data = Pemain::all();
        return view('datapemain',compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function tambahact(Request $request){
        Pemain::create($request->all());
        return redirect()->route('pemain');
    }

    public function tampildata($id){

        $data = Pemain::find($id);
        return view('tampildata',compact('data'));

    }

    public function updatedata(Request $request, $id){
        $data = Pemain::find($id);
        $data->update($request->all());
        return redirect()->route('pemain');
    }

    public function deletedata($id){
        $data = Pemain::find($id);
        $data->delete();
        return redirect()->route('pemain')->with('success','Data dihapus');
    }
}
