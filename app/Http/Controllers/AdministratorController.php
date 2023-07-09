<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AdminProdi;
use App\Models\Alumni;

class AdministratorController extends Controller
{
    public function index() {
        $admin = User::where("jenis", "admin_prodi")->count();
        $alumni = User::where("jenis", "alumni")->count();
        return view('administrator.administrator', compact('admin', 'alumni'));
    }

    public function listAdmin() {
        $count_user = User::where("jenis", "admin_prodi")->count();
        $users = User::where("jenis", "admin_prodi")->get();
        $admins = AdminProdi::get();
        return view('administrator.user-admin', compact('admins', 'users', 'count_user'));
    }

    public function listAlumni() {
        $count_user = User::where("jenis", "alumni")->count();
        $users = User::where("jenis", "alumni")->get();
        $alumnis = Alumni::get();
        return view('administrator.user-alumni', compact('alumnis', 'users', 'count_user'));
    }

    public function destroy($id)
    {  
        AdminProdi::where('id_user', $id)->delete(); 
        User::where('id', $id)->delete();
        return redirect()->back()
        ->with('success','User telah dihapus.');
    }
}
