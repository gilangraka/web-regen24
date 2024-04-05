<?php

namespace App\Http\Controllers;

use App\Models\Camin;
use App\Models\StatusVote;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    // API Start
    public function getUserAll()
    {
        // Menampilkan semua user
        $query = User::orderBy('id', 'asc')->get();
        return response()->json([
            "data"  => $query
        ]);
    }
    public function getUserBelum()
    {
        // Menampilkan user yang belum memilih
        $query = User::where('status_memilih', 0)->orderBy('id', 'asc')->get();
        return response()->json([
            "data"  => $query
        ]);
    }
    public function getUserSudah()
    {
        // Menampilkan user yang sudah memilih
        $query = User::where('status_memilih', 1)->orderBy('id', 'asc')->get();
        return response()->json([
            "data"  => $query
        ]);
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
        $query = Camin::all();
        return response()->json($query);
    }
    public function getCaminByID($id_camin)
    {
        $query = Camin::where("id", $id_camin)->get();
        return response()->json($query);
    }
    public function getStatusVote()
    {
        $query = StatusVote::all();
        return response()->json($query);
    }
    public function setStatusVote()
    {
        $getData = StatusVote::find("1");

        if ($getData->status == 1) {
            $getData->status = 0;
            $getData->save();
            return response()->json([
                "message" => "StatusVote di set menjadi 0",
                "data"    => $getData->get()
            ]);
        }

        $getData->status = 1;
        $getData->save();
        return response()->json([
            "message" => "StatusVote di set menjadi 1",
            "data" => $getData->get()
        ]);
    }
    public function countUser()
    {
        $query1 = User::all()->count();
        $query2 = User::where('status_memilih', 1)->get()->count();
        $query3 = User::where('status_memilih', 0)->get()->count();
        return response()->json([
            "total_user" => $query1,
            "sudah_memilih" => $query2,
            "belum_memilih" => $query3
        ]);
    }
    public function countPilihCamin()
    {
        $query = User::all()->count();
        $query1 = User::where('camin_id', 1)->get()->count();
        $query2 = User::where('camin_id', 2)->get()->count();
        $query3 = User::where('camin_id', 3)->get()->count();
        return response()->json([
            "camin_1" => $query1,
            "camin_2" => $query2,
            "camin_3" => $query3,
            "golput"  => $query - ($query1 + $query2 + $query3)
        ]);
    }
    public function voteCamin(Request $request)
    {
        $id_camin = $request->id_camin;
        $id_user  = Auth::user()->id;
        $updateUser = User::find($id_user);
        $updateUser->status_memilih = 1;
        $updateUser->camin_id = $id_camin;
        $updateUser->save();
        return redirect('/');
    }
    // API End
}
