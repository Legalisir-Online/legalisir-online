<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;

class AjuanLegalisirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAjuanValid()
    {
        $transaksis = Transaksi::where('status', 'success')->get();
        $alumnis = Alumni::get();
        $users = User::get();
        return view('admin.legalisir-selesai', compact('transaksis', 'alumnis', 'users'));
    }
    public function getAjuanPending()
    {
        $transaksis = Transaksi::where('status', 'pending')->get();
        $alumnis = Alumni::get();
        $users = User::get();
        return view('admin.legalisir-pending', compact('transaksis', 'alumnis', 'users'));
    }
    
    public function getAjuanTidakValid()
    {
        $transaksis = Transaksi::where('status', 'tidak valid')->get();
        $alumnis = Alumni::get();
        $users = User::get();
        return view('admin.legalisir-gagal', compact('transaksis', 'alumnis', 'users'));
    }
    
    public function getAllAjuan()
    {
        $transaksis = Transaksi::get();
        $alumnis = Alumni::get();
        $users = User::get();
        return view('admin.daftar-ajuan-legalisir', compact('transaksis', 'alumnis', 'users'));
    }
}
