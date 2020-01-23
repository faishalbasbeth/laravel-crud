<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    //
    public function index() {

    	$pegawai = Pegawai::all();
    	return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function tambah() {

    	return view('pegawai_tambah');
    }

    public function store(Request $request) {

    	$this->validate($request, [
    		'pegawai_nama' => 'required',
    		'pegawai_jabatan' => 'required',
    		'pegawai_umur' => 'required',
    		'pegawai_alamat' => 'required'
    	]);

    	Pegawai::create([
    		'pegawai_nama' => $request->pegawai_nama,
    		'pegawai_jabatan' => $request->pegawai_jabatan,
    		'pegawai_umur' => $request->pegawai_umur,
    		'pegawai_alamat' => $request->pegawai_alamat
    	]);

    	return redirect('/pegawai');
    }

    public function edit($pegawai_id) {

    	$pegawai = Pegawai::find($pegawai_id);
    	return view('pegawai_edit', ['pegawai' => $pegawai]);
    }

    public function update($pegawai_id, Request $request) {

	    $this->validate($request,[
		   'pegawai_nama' => 'required',
		   'pegawai_jabatan' => 'required',
		   'pegawai_umur' => 'required',
		   'pegawai_alamat' => 'required'
	    ]);
	 
	    $pegawai = Pegawai::find($pegawai_id);
	    $pegawai->pegawai_nama = $request->pegawai_nama;
	    $pegawai->pegawai_jabatan = $request->pegawai_jabatan;
	    $pegawai->pegawai_umur = $request->pegawai_umur;
	    $pegawai->pegawai_alamat = $request->pegawai_alamat;
	    $pegawai->save();
	    return redirect('/pegawai');
	}

	public function delete($pegawai_id) {

		$pegawai = Pegawai::find($pegawai_id);
		$pegawai->delete();
		return redirect('/pegawai');
	}
}
