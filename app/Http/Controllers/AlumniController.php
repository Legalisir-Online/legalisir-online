<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AlumniController extends Controller
{
    public function getAlumniById($id)
    {
        $data = Alumni::find($id);

        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Alumni',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Alumni with id ' . $id . ' not found'
            ], 404);
        }
    }

    public function getAllAlumni()
    {
        $data = Alumni::all();
        return response()->json([
            'success' => true,
            'message' => 'List Data Alumni',
            'data' => $data
        ], 200);
    }

    public function tambahDataAlumni(Request $request)
    {
        $data = $request->only(['id', 'id_user', 'nama', 'nim', 'nik', 'tempat_lahir', 'tgl_lahir', 'nomor_wa', 'agama', 'jenis_kelamin', 'alamat', 'kota', 'provinsi', 'kode_pos', 'rt', 'rw', 'kelurahan', 'kecamatan', 'kode_prodi']);

        $alumni = Alumni::tambahDataAlumni($data);

        if ($alumni) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data alumni berhasil ditambahkan',
                'data' => $alumni
            ], 201);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal menambahkan data alumni'
            ], 500);
        }
    }

    public function deleteDataAlumni($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->delete();

        return response()->json(['message' => 'Alumni deleted successfully'], 200);
    }

    // public function show(string $id): View
    // {
    //     return view('user.profile', [
    //         'user' => User::findOrFail($id)
    //     ]);
    // }

    // return Person::find($id);
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
