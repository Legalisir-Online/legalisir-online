<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::where('id_user', auth()->user()->id)->first();
        // $alumnis->tgl_lahir = date('Y-m-d', strtotime($alumnis->tgl_lahir));
        // dd($alumnis);
        return view('alumni.biodata', compact('alumnis'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:200',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required',
            'agama' => 'required|string|max:20',
            'nik' => 'required|numeric|max:9999999999999999',
            'nomor_wa' => 'required|string|max:20',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|string|max:200',
            'rt' => 'required|numeric|max:100',
            'rw' => 'required|numeric|max:100',
            'kelurahan' => 'required|string|max:20',
            'kecamatan' => 'required|string|max:20',
            'kecamatan' => 'required|string|max:20',
            'kecamatan' => 'required|string|max:20',
            'kecamatan' => 'required|string|max:20',
            'kecamatan' => 'required|string|max:20',
            'kode_prodi' => 'required|string|max:2',
            'kota' => 'required|string|max:20',
            'provinsi' => 'required|string|max:20',
            'kode_pos' => 'required|string|max:5'
        ]);
        if (!$validatedData) {
            return redirect()->back()->withErrors($validatedData);
        }
        // dd($validatedData);


        // buat aplot file
        // $path = Storage::disk('public')->putFile('dokumen', $request->file(''));
        $alumnis = Alumni::where('id_user', auth()->user()->id)->first();
        if (!$alumnis) {
            $alumnis = new Alumni;
            $alumnis->id_user = Auth::user()->id;
        }

        $alumnis->nama = $request->nama;
        $alumnis->tempat_lahir = $request->tempat_lahir;
        $alumnis->tgl_lahir = $request->tanggal_lahir;
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


        // return Redirect::route('/homepage')->with('success', 'Biodata telah terisi.');

        return redirect('/homepage')->with('success', 'Biodata telah terisi.');

        // Setelah berhasil, set pesan sukses ke dalam session
        // $request->session()->flash('success', 'Data berhasil disimpan.');

        // Redirect ke halaman yang diinginkan
        // return redirect()->route('/homepage');
    }
}
