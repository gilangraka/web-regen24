<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginAction(Request $request)
    {
        $request->validate([
            'login_id' => ['required'],
            'password' => ['required'],
        ]);
        $query = User::where('login_id', $request->login_id)->where('password', $request->password)->first();

        if ($query) {
            Auth::login($query);
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->withInput($request->input())->with('error', 'ID atau Password Salah');
    }

    public function logoutAction()
    {
        Auth::logout();
        return redirect('/');
    }
}
