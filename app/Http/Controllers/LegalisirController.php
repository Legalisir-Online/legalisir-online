<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LegalisirController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_ijazah' => 'required',
            'nama_transkrip' => 'required',
            'ijazah' => 'required|mimes:pdf,doc',
            'transkrip' => 'required|mimes:pdf,doc'
        ]);

        $user_id = auth()->user()->id;
        $alumni_id = Alumni::where('id_user', $user_id)->first()->id;

        if ($request->ijazah) {
            $fileext = $request->file('ijazah')->getClientOriginalExtension();
            $filename = $alumni_id . '_ijazah.' . $fileext;
            $filePath = $request->file('ijazah')->storeAs('uploads', $filename, 'public');
            Dokumen::create([
                'nama' => $request->nama_ijazah,
                'path' => '/storage/' . $filePath,
                'keterangan' => '',
                'jenis' => 'Ijazah',
                'status' => 'Menunggu',
                'alumni_id' => $alumni_id
            ]);
        }
        if ($request->transkrip) {
            $fileext = $request->file('transkrip')->getClientOriginalExtension();
            $filename = $alumni_id . '_transkrip.' . $fileext;
            $filePath = $request->file('transkrip')->storeAs('uploads', $filename, 'public');
            Dokumen::create([
                'nama' => $request->nama_transkrip,
                'path' => '/storage/' . $filePath,
                'keterangan' => '',
                'jenis' => 'Transkrip',
                'status' => 'Menunggu',
                'alumni_id' => $alumni_id
            ]);

        }
        return redirect('/form-legalisir')->with('success', 'Dokumen berhasil diupload');
    }

    public function ajuan(Request $request)
    {
        $alumni = Alumni::where('id_user', auth()->user()->id)->first();
        Dokumen::where('alumni_id', $alumni->id)->where('jenis', $request->jenis)->update([
            'status' => 'Menunggu'
        ]);
        return redirect('/homepage')->with('success', 'Dokumen berhasil diajukan');
    }

    public function alumni_form_legalisir()
    {
        return view('alumni.form-legalisir');
    }

    public function admin_berkas_index()
    {
        $alumni = Alumni::whereHas('dokumen')->get();

        foreach ($alumni as $a) {
            $a->dokumen = Dokumen::where('alumni_id', $a->id)->get();
        }

        return view('admin.daftar-berkas', compact('alumni'));
    }

    public function admin_berkas_edit(String $id)
    {
        $dokumen = Dokumen::find($id);
        $alumni = Alumni::whereHas('dokumen', function ($query) use ($id) {
            $query->where('id', $id);
        })->first();

        // dd($alumni);

        return view('admin.validasi-berkas', compact('dokumen', 'alumni'));
    }

    public function admin_berkas_update_valid(String $id)
    {
        $dokumen = Dokumen::find($id);
        $dokumen->update([
            'status' => 'Valid'
        ]);

        return redirect()->route('admin.berkas.index');
    }

    public function admin_berkas_update_invalid(String $id, Request $request)
    {
        $dokumen = Dokumen::find($id);
        $dokumen->update([
            'status' => 'Invalid',
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('admin.berkas.index');
    }

    public function admin_legalisir_index()
    {
        $alumni = Alumni::whereHas('dokumen')->get();

        foreach ($alumni as $a) {
            $a->dokumen = Dokumen::where('alumni_id', $a->id)->where('status', 'Valid')->get();
        }

        return view('admin.daftar-ajuan-legalisir', compact('alumni'));

    }

    public function admin_legalisir_edit(String $id)
    {
        $dokumen = Dokumen::find($id);

        $alumni = Alumni::whereHas('dokumen', function ($query) use ($id) {
            $query->where('id', $id);
        })->first();

        return view('admin.edit-ajuan', compact('dokumen', 'alumni'));
    }

    public function admin_legalisir_update(String $id)
    {

    }

    public function admin_edit(String $id)
    {
    }

    public function admin_update(String $id, Request $request)
    {
    }
}