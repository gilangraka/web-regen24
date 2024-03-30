<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insert = new User;
        $insert->nama = "Panitia Regen 2024";
        $insert->nim  = "panitia";
        $insert->email = "panitia";
        $insert->login_id = "panitia_regen2024";
        $insert->password = "panitia_regen2024";
        $insert->role_id  = 1;
        $insert->status_memilih = 0;
        $insert->camin_id = 0;
        $insert->save();
    }
}
