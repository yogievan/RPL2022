<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function DashboardAdmin()
    {
        return view('admin.DashboardAdmin', ['cek' => 'dashboard']);
    }

    public function adminsignin()
    {
        return view('AdminSign-in');
    }
    public function adminceklogin(Request $request)
    {
        $user = Admin::where('username', $request->username)->where('password', md5($request->password))->first();
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        Auth::login($user);
        return redirect('/DashboardAdmin');
    }
    
    public function adminlogout()
    {
        Auth::logout();
        return redirect('/admin/Login');
    }

    public function AdminSignup()
    {
        return view('AdminSign-up');
    }

    public function addDataAdmin(Request $request)
    {
        $admin = Admin::create([
            'username' => $request -> username,
            'password' => md5($request->password)
        ]);
        return redirect('/admin/Login');
    }
}
