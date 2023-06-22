<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alumni;
use App\Models\User;
use App\Models\Transaksi;

class InvoiceController extends Controller
{
    public function invoice(){
        $alumnis = Alumni::getAllAlumni();
        $users = User::get();
        $transaksis = Transaksi::get();
        return view('alumni.invoice', compact('alumnis', 'users', 'transaksis'));
    }
}
