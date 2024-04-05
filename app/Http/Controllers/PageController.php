<?php

namespace App\Http\Controllers;

use App\Models\Camin;
use App\Models\StatusVote;
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
        $query = StatusVote::find("1");

        if (Auth::getUser()->role_id == 1) {
            return view('pages.admin.dashboard');
        } else {
            if ($query->status == 1) {
                if (Auth::getUser()->status_memilih == 0) {
                    $camin = Camin::all();
                    return view('pages.user.index-user', compact('camin'));
                } else {
                    return view('pages.user.thank-you');
                }
            } else {
                Auth::logout();
                return redirect('/login')->with("error", "Mohon maaf, voting sudah ditutup");
            }
        }
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
