<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\Camin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class PanitiaController extends Controller
{
    private function generateUser($nama_user)
    {
        $login_user = strtolower(substr($nama_user, 0, 4) . "_" . Str::random(4));
        $query = User::where('login_id', $login_user)->first();
        $generate = true;
        while ($generate == true) {
            if ($query) {
                $login_user = strtolower(substr($nama_user, 0, 4) . "_" . Str::random(4));
            } else {
                $generate = false;
            }
        }
        return $login_user;
    }
    public function tambahUser(Request $request)
    {
        $login_id = $this->generateUser($request->nama);

        $insert = new User;
        $insert->nama = $request->nama;
        $insert->nim = $request->nim;
        $insert->email = $request->email;
        $insert->login_id = $login_id;
        $insert->password = "pass_" . Str::random(4);
        $insert->role_id = 2;
        $insert->status_memilih = 0;
        $insert->camin_id = 0;
        $insert->save();
        return redirect('/dashboard/view_user')->with('success', 'Berhasil menambah data user.');
    }

    public function importUser(Request $request)
    {
        $query = Excel::import(new UsersImport, $request->file('file')->store('temp'));
        if ($query) {
            return back()->with("success", "Berhasil mengimport data.");
        }
        return back()->with("error", "Gagal mengimport data");
    }

    public function exportUser()
    {
        return Excel::download(new UsersExport, 'data_users.xlsx');
    }
    public function tambahCamin(Request $request)
    {
        $insert = new Camin;
        $insert->nama = $request->nama;
        $insert->visi = $request->visi;
        $insert->misi = $request->misi;
        $insert->foto = $request->foto;
        $insert->save();
        return redirect('/dashboard/view_camin')->with('success', 'Berhasil menambah data.');
    }
    public function editCamin(Request $request)
    {
        $query = Camin::where('id', $request->id_camin)->update([
            'nama' => $request->nama,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'foto' => $request->foto
        ]);
        if (!$query) {
            return redirect('/dashboard/view_camin')->with('error', 'Gagal mengupdate data.');
        }
        return redirect('/dashboard/view_camin')->with('success', 'Berhasil mengupdate data.');
    }
    public function voteThisCamin($id_camin)
    {
        User::where("id", Auth::id())->update(array(
            "status_memilih"    => 1,
            "camin_id"          => $id_camin
        ));
        return redirect('/dashboard');
    }
}
