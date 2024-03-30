<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    private function generateUser($nama_user)
    {
        $login_user = strtolower(substr($nama_user, 0, 4) . "_" . Str::random(4));
        $query = User::where('login_id', $login_user)->first()->count();

        while ($query > 0) {
            $login_user = strtolower(substr($nama_user, 0, 4) . "_" . Str::random(4));
        }
        return $login_user;
    }

    public function model(array $row)
    {
        return new User([
            'nama' => $row['Nama'],
            'nim' => $row['NIM'],
            'email' => $row['Email'],
            'login_id' => $this->generateUser($row['Nama']),
            'password' => "pass" . Str::random(4),
            'role_id' => 2,
            'status_memilih' => 0,
            'camin_id' => 0
        ]);
    }
}
