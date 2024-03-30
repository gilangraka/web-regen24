<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function loginPage()
    {
        return view('login');
    }
    public function dashboardPage()
    {
        if (Auth::getUser()->role_id == 1) {
            return view('admin');
        }
        return view('user');
    }
    public function viewUserPage()
    {
        if (Auth::getUser()->role_id == 1) {
            return view('view_user');
        }
        return redirect('/');
    }
    public function viewCaminPage()
    {
        if (Auth::getUser()->role_id == 1) {
            return view('view_camin');
        }
        return redirect('/');
    }
}
