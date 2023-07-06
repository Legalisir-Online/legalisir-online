<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Transaksi;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(){
        $valid = Document::where('status', 1)->count();
        $nonvalid = Document::where('status', 0)->count();
        $pending = Document::where('status', null)->count();
        
        $t_valid = Transaksi::where('status_transaksis', 'success')->count();
        $t_nonvalid = Transaksi::where('status_transaksis', 'failed')->count();
        $t_pending = Transaksi::where('status_transaksis', 'pending')->count();
        return view('admin.admin', compact('valid', 'nonvalid', 'pending', 't_valid', 't_nonvalid', 't_pending'));
    }
}
