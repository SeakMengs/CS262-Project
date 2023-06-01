<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logCompanyUserOut()
    {
        Auth::guard('companyUser')->logout();
        return redirect()->route('home');
    }

    public function logNormalUserOut()
    {
        Auth::guard('normalUser')->logout();
        return redirect()->route('home');
    }
}
