<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function admin()
    {
        $usertype = Auth::user()->name;

        if ($usertype == 'admin') {
            return view('admin.home');
        } else {
            return view('dashboard');
        }
    }
}
