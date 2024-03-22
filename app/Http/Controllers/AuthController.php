<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function actionLogin(Request $request)
    {
        $request->validate([
            "login_id" => "required",
            "password" => "required"
        ]);
        $get_user = User::where('login_id', $request->login_id)
            ->where('password', $request->password)
            ->first();

        if ($get_user) {
            Auth::login($get_user);
            redirect('/dashboard');
            // Auth::getUser(); -> Untuk mendapatkan data user
        } else {
            return back()->with([
                'error' => 'ID atau Password Salah!'
            ])->withInput($request->input());
        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
