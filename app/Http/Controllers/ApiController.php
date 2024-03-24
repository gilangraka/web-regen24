<?php

namespace App\Http\Controllers;

use App\Models\Camin;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // API Start
    public function getUserAll()
    {
        // Menampilkan semua user
        $query = User::all();
        return response()->json($query);
    }
    public function getUserBelum()
    {
        // Menampilkan user yang belum memilih
        $query = User::where('status_memilih', 0);
        return response()->json($query);
    }
    public function getUserSudah()
    {
        // Menampilkan user yang sudah memilih
        $query = User::where('status_memilih', 1);
        return response()->json($query);
    }
    public function updateChart()
    {
        $getCamin = Camin::all();
        $data_camin = array();
        foreach ($getCamin as $i) {
            $data_camin[] = $i['id'];
        }

        $dataPendukung = array();
        foreach ($data_camin as $i) {
            $id_camin = "idCamin_" . $i;
            $countPendukung = User::where('camin_id', $i)->get()->count();

            $dataPendukung[] = [
                "id_camin"  => $id_camin,
                "count_pendukung" => $countPendukung
            ];
        }
        return response()->json($dataPendukung);
    }
    public function getCaminAll()
    {
    }
    public function getCaminBerdasarID()
    {
    }
    public function getStatusVote()
    {
    }
    public function setStatusVote()
    {
    }
    // API End
}
