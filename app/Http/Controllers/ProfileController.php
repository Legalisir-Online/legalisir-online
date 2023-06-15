<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alumni;

class ProfileController extends Controller
{
    public function alumni(){
        $alumnis = Alumni::get();
        return view('alumni.profile', compact('alumnis'));
    }
}
