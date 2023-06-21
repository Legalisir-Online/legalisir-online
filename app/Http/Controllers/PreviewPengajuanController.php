<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alumni;
use App\Models\User;
use App\Models\Transaksi;

class PreviewPengajuanController extends Controller
{
    public function data(){
        $alumnis = Alumni::getAllAlumni();
        $users = User::get();
        $transaksis = Transaksi::get();
        return view('alumni.preview-pengajuan-legalisir', compact('alumnis', 'users', 'transaksis'));
    }
}
