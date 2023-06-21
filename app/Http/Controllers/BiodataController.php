<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alumni;

class BiodataController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:200',
            'nim' => 'required|string|max:8',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required',
            'agama' => 'required|string|max:20',
            'nik' => 'required|numeric|max:16',
            'nomor_wa' => 'required|string|max:20',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|string|max:200',
            'rt' => 'required|numeric|max:3',
            'rw' => 'required|numeric|max:3',
            'kelurahan' => 'required|string|max:20',
            'kecamatan' => 'required|string|max:20',
            'kode_prodi' => 'required|string|max:2',
            'kota' => 'required|string|max:20',
            'provinsi' => 'required|string|max:20',
            'kode_pos' => 'required|string|max:5'
        ]);
        // buat aplot file
        // $path = Storage::disk('public')->putFile('dokumen', $request->file(''));

        $alumnis = new Alumni;
        $alumnis->nama = $request->nama;
        $alumnis->nim = $request->nim;
        $alumnis->tempat_lahir = $request->tempat_lahir;
        $alumnis->tanggal_lahir = $request->tanggal_lahir;
        $alumnis->agama = $request->agama;
        $alumnis->nik = $request->nik;
        $alumnis->nomor_wa = $request->nomor_wa;
        $alumnis->jenis_kelamin = $request->jenis_kelamin;
        $alumnis->alamat = $request->alamat;
        $alumnis->rt = $request->rt;
        $alumnis->rw = $request->rw;
        $alumnis->kelurahan = $request->kelurahan;
        $alumnis->kecamatan = $request->kecamatan;
        $alumnis->kode_prodi = $request->kode_prodi;
        $alumnis->kota = $request->kota;
        $alumnis->provinsi = $request->provinsi;
        $alumnis->kode_pos = $request->kode_pos;
        $alumnis->save();

        return redirect()->route('/biodata')
        ->with('success', 'Biodata telah terisi.');
    }
}
