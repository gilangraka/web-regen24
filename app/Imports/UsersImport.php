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

    public function model(array $row)
    {
        return new User([
            'nama' => $row["nama"],
            'nim' => $row["nim"],
            'email' => $row["email"],
            'login_id' => $this->generateUser($row["nama"]),
            'password' => "pass" . Str::random(4),
            'role_id' => 2,
            'status_memilih' => 0,
            'camin_id' => 0
        ]);
    }
}
