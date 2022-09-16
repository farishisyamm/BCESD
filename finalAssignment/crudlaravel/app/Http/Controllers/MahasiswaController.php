<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();
        return view('welcome',compact(['mahasiswa']));
    }

    public function tambah(){
        return view('mahasiswa.tambah');
    }

    public function simpan(Request $request){
        Mahasiswa::create($request->except(['_token','submit']));
        return redirect('/');
    }

    public function ubah($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.ubah',compact(['mahasiswa']));
    }

    public function perbarui($id,Request $request){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->except(['_token','submit']));
        return redirect('/');
    }

    public function hapus($id,Request $request){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/');
    }
}
