<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function managersignin()
    {
        return view('ManagerSign-in');
    }
}
