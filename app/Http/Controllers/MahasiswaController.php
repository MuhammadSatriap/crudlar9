<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function mahasiswa(Request $request){
        if($request->has('search')){
            $data = Mahasiswa::where('nama', 'LIKE', '%' .$request->search.'%')->paginate(5);
        } else {
            $data = Mahasiswa::paginate(5);
        }
        
        
        return view('datamahasiswa',compact('data'));
    }

    public function tambahmhs(){
        return view('tambahmhs');
    }

    public function tambahact(Request $request){
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success','Berhasil menambah data mahasiswa');
    }

    public function tampilmhs($id){

        $data = Mahasiswa::find($id);
        return view('tampilmhs',compact('data'));

    }
    public function updatedata(Request $request, $id){
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success','Data mahasiswa berhasil diubah');
    }
    public function deletemhs($id){
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success','Data mahasiswa berhasil dihapus');
    }

    
}
