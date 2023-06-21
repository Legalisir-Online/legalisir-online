<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alumni;
use App\Models\User;

class ProfileController extends Controller
{
    // public function alumni(){
    //     $alumnis = Alumni::get();
    //     return view('alumni.profile', compact('alumnis'));
    // }

    // public function user(){
    //     $users = User::get();
    //     return view('alumni.profile', compact('users'));
    // }
    
    public function data(){
        $alumnis = Alumni::getAllAlumni();
        $users = User::get();
        return view('alumni.profile', compact('alumnis', 'users'));
    }
}
