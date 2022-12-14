<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUserController extends Controller
{
    public function TabelUser()
    {
        $user = User::orderBy('id', 'DESC')->paginate(5);
        return view ('admin.TabelUser',['cek' => 'tabelUser'], ['user' => $user]);
    }
    public function user_view($id)
    {
        $user = user::find($id);
        return view('admin.viewUser',['cek' => 'tabelUser'], ['user' => $user]);
    }
}
