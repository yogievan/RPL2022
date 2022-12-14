<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\support\Facades\Auth;

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
        Auth::login($user);
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

    public function profile_user($id)
    {
        $user = User::find($id);
        return view('customer.settingProfile', ['user' => $user]);
    }

    public function profile_update(Request $request)
    {
        $user = User::find($id);
        $user -> username = $request->username;
        $user -> tgl_lahir = $request->tgl_lahir;
        $user -> email = $request->email;
        $user -> no_telp = $request->no_telp;
        $user -> alamat = $request->alamat;
        $user -> save();
        return redirect('customer.DashboardCustomer');
    }
    public function DashboardGuest()
    {
        return view('DashboardGuest');
    }

    public function adminsignin()
    {
        return view('AdminSign-in');
    }
    public function adminceklogin(Request $request)
    {
        $user = User::where('username', $request->email)->where('password', md5($request->password))->first();
        $validatedData = $request->validate([
            'username' => ['required'.'username = admin'],
            'password' => ['required']
        ]);
        Auth::login($user);
        return redirect('/DashboardManager');
    }
    
    public function adminlogout()
    {
        Auth::logout();
        return redirect('/admin/Login');
    }

    public function managerceklogin(Request $request)
    {
        $user = User::where('username', $request->email)->where('password', md5($request->password))->first();
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        Auth::login($user);
        return redirect('/DashboardManager');
    }
    
    public function DashboardManager()
    {
        return view('manager.DashboardManager');
    }
}
