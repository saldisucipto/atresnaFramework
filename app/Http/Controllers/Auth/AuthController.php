<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    // index
    public function login()
    {
        return Inertia::render('Auth/Login');
    }
}
