<?php

namespace App\Http\Controllers;

use App\Models\Camin;
use App\Models\User;
use Illuminate\Http\Request;

class PanitiaController extends Controller
{
    // API Start
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
    // API End
}
