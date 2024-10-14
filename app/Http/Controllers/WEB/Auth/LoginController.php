<?php

namespace App\Http\Controllers\WEB\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|min:8'
        ]);

        dd($request->all());
    }
}
