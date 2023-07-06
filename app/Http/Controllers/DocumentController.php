<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getDataRiwayatAjuan($id)
    {
        $ajuans = Document::where('alumni_id', $id)->get();
        if ($ajuans) {
            return view('alumni.riwayat-ajuan', compact('ajuans'));
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Alumni with id ' . $id . ' not found'
            ], 404);
        }
        return view('alumni.riwayat-ajuan', compact('ajuans'));
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
