<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Redirect;

class adminController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }
}
