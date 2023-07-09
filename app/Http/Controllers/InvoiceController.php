<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alumni;
use App\Models\User;
use App\Models\Transaksi;

class InvoiceController extends Controller
{
    public function getDataInvoiceById($id){
        // $alumnis = Alumni::getAllAlumni();
        $alumnis = Alumni::where('id_user', $id)->get();
        $users = User::where('id', $id)->get();
        $transaksis = Transaksi::where('id_alumni', $id)->get();
        
        // return view('alumni.invoice', compact('alumnis', 'users', 'transaksis'));
        if ($alumnis) {
            return view('alumni.invoice', compact('alumnis', 'users', 'transaksis'));
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Alumni with id ' . $id . ' not found'
            ], 404);
        }
    }
}
