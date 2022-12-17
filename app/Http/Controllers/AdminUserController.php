<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Manajer;

class AdminUserController extends Controller
{
    public function TabelUser()
    {
        $user = User::orderBy('id', 'DESC')->paginate(10);
        $admin = Admin::orderBy('id', 'DESC')->paginate(10);
        $manajer = Manajer::orderBy('id', 'DESC')->paginate(10);
        return view ('admin.TabelUser',['cek' => 'tabelUser'], ['user' => $user, 'admin' => $admin, 'manajer' => $manajer]);
    }
    public function user_view($id)
    {
        $user = user::find($id);
        return view('admin.viewUser',['cek' => 'tabelUser'], ['user' => $user]);
    }
}
