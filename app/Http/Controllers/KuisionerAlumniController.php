<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuisioner;
use App\Models\Pertanyaan;
use App\Models\Opsi;

class KuisionerAlumniController extends Controller
{
    public function pertanyaan(){
        $pertanyaans = Pertanyaan::get();
        $opsis = Opsi::get();
        return view('alumni.kuesioner', compact('pertanyaans', 'opsis'));
    }
}
