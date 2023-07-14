<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Alumni;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function alumni_index()
    {
        $alumni = Alumni::where('id_user', auth()->user()->id)->first();

        $dokumen = Dokumen::where('alumni_id', $alumni->id)->count();
        return view('alumni.homepage', compact('dokumen'));
    }

    public function administrator_index()
    {
        return view('administrator.administrator');
    }

    public function admin_prodi_index()
    {
        return view('admin.admin');
    }
}