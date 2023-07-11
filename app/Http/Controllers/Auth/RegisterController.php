<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create([
            'nim' => $validatedData['nim'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'status' => 'aktif',
            'jenis' => 'alumni',
        ]);

        Alumni::create([
            'id_user' => $user->id,
            'nama' => '',
            'nik' => '',
            'tempat_lahir' => '',
            'tgl_lahir' => Date::now(),
            'nomor_wa' => '',
            'agama' => '',
            'jenis_kelamin' => '',
            'alamat' => '',
            'kota' => '',
            'provinsi' => '',
            'kode_pos' => '',
            'rt' => '',
            'rw' => '',
            'kelurahan' => '',
            'kecamatan' => '',
            'kode_prodi' => '05',

        ]);

        return redirect('/login');
    }
}