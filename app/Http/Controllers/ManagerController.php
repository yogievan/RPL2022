<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Manajer;

class ManagerController extends Controller
{
    public function DashboardManager()
    {
        return view('manager.DashboardManager');
    }

    public function managersignin()
    {
        return view('ManagerSign-in');
    }

    public function managerceklogin(Request $request)
    {
        $user = Manajer::where('username', $request->username)->where('password', md5($request->password))->first();
        $validatedData = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        Auth::login($user, true);
        return redirect('/DashboardManager');
    }
    public function managerlogout()
    {
        Auth::logout();
        return redirect('/manager/Login');
    }
    public function ManajerSignup()
    {
        return view('ManajerSign-up');
    }

    public function addDataManajer(Request $request)
    {
        $manajer = Manajer::create([
            'username' => $request -> username,
            'password' => md5($request->password)
        ]);
        return redirect('/manager/Login');
    }
}
