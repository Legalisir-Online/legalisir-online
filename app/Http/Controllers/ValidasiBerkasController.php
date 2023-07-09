<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;

class ValidasiBerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAjuanValid()
    {
        $dokumens = Document::where('status', 1)->get();
        $alumnis = Alumni::get();
        $users = User::get();
        return view('admin.berkas-selesai', compact('dokumens', 'alumnis', 'users'));
    }

    public function getAjuanPending()
    {
        $dokumens = Document::where('status', )->get();
        $alumnis = Alumni::get();
        $users = User::get();
        return view('admin.berkas-pending', compact('dokumens', 'alumnis', 'users'));
    }
    
    public function getAjuanTidakValid()
    {
        $dokumens = Document::where('status', 0)->get();
        $alumnis = Alumni::get();
        $users = User::get();
        return view('admin.berkas-tidak-valid', compact('dokumens', 'alumnis', 'users'));
    }

    public function getAllAjuan()
    {
        $dokumens = Document::get();
        $alumnis = Alumni::get();
        $users = User::get();
        return view('admin.daftar-berkas', compact('dokumens', 'alumnis', 'users'));
    }
}
