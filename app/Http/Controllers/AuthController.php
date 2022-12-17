<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Manajer;
use Illuminate\support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class AuthController extends Controller
{
   
    public function signin()
    {
        return view('sign-in');
    }

    public function cekLogin(Request $request)
    {
        $user = User::where('email', $request->email)->where('password', md5($request->password))->first();
        $validatedData = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        Auth::login($user,true);
        return redirect('/DashboardCustomer');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function signup()
    {
        return view('sign-up');
    }

    public function addDataUser(Request $request)
    {
        $user = User::create([
            'username' => $request -> username,
            'nama_user' => $request -> nama_user,
            'email' => $request -> email,
            'no_telp' => $request -> no_telp,
            'tgl_lahir' => $request -> tgl_lahir,
            'alamat' => $request -> alamat,
            'password' => md5($request->password)
        ]);
        return redirect('/');
    }

    public function user_search(Request $request)
    {
        $cari = $request-> cari;
        $user = User::where('nama_pengguna','like','%'.$cari.'%')->orWhere('email','like','%'.$cari.'%')->paginate();
        return view('admin.TabelUser', ['cek' => 'tabelUser'],['user' => $user]);
    }

    public function DashboardGuest()
    {
        return view('DashboardGuest');
    }
}
