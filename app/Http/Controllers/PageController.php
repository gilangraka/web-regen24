<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

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
        return view('pages.auth.login');
    }
    public function dashboardPage()
    {
        if (Auth::getUser()->role_id == 1) {
            return view('pages.admin.dashboard');
        }
        return view('pages.user.index-user');
    }
    public function viewUserPage()
    {
        if (Auth::getUser()->role_id == 1) {
            return view('pages.admin.view_user');
        }
        return redirect('/');
    }
    public function viewCaminPage()
    {
        if (Auth::getUser()->role_id == 1) {
            return view('pages.admin.edit_camin');
        }
        return redirect('/');
    }
}
