<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Makul;
use App\Mahasiswa;
use Alert;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index() {
        $nilai = Nilai::with(['mahasiswa', 'makul'])->get(); 
        return view('nilai.index', compact('nilai'));
    }

    public function create(){
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        return view('nilai.create', compact('mahasiswa', 'makul'));
    }

    public function store(Request $request){
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }

    public function edit($id){ 
        
        $makul = Makul::all();
        $mahasiswa = Mahasiswa::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai', 'makul', 'mahasiswa'));
    }
    public function update(Request $request, $id){
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Yeahh Berhasil Mengedit Data','success');
        return redirect()->route('nilai');
    }

    public function destroy($id){
        $nilai = Nilai::find($id);
        $nilai->delete($id);
        toast('Yeahh Berhasil Menghapus Data','success');
        return redirect()->route('nilai');
    }
}