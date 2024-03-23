<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PanitiaController extends Controller
{
    public function tampilUser()
    {
        // Menampilkan semua user
        $query = User::all();
        return response()->json($query);
    }
    public function tampilUserBelum()
    {
        // Menampilkan user yang belum memilih
        $query = User::where('status_memilih', 0);
        return response()->json($query);
    }
    public function tampilUserSudah()
    {
        // Menampilkan user yang sudah memilih
        $query = User::where('status_memilih', 1);
        return response()->json($query);
    }
}
