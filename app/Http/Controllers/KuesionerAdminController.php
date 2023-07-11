<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KuesionerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $alumnis = Alumni::where('id_user', auth()->user()->id)->first();
        // $alumnis->tgl_lahir = date('Y-m-d', strtotime($alumnis->tgl_lahir));
        // dd($alumnis);
        // return view('alumni.biodata', compact('alumnis'));
        $kuesioners = Kuesioner::all();
        foreach ($kuesioners as $kuesioner) {
            $kuesioner->responden = 0;
        }
        // $alumnis->tgl_lahir = date('Y-m-d', strtotime($alumnis->tgl_lahir));
        // dd($alumnis);
        // return view('alumni.biodata', compact('alumnis'));
        return view('admin/kuesioner', compact('kuesioners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/tambah-kuesioner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumnis = new Kuesioner();
        // dd($request->all());
        $alumnis->nama = $request->nama;
        $alumnis->status = $request->status;
        $alumnis->periode_mulai = $request->periode_mulai;
        $alumnis->periode_selesai = $request->periode_selesai;
        $alumnis->status = $request->status;
        $alumnis->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
