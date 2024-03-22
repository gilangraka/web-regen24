<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insert = new Users;
        $insert->nama     = "Panitia Regen 2024";
        $insert->nim      = "Panitia";
        $insert->email    = "Panitia";
        $insert->id_login = "panitia-regen24@123";
        $insert->password = "panitia-regen24@123";
        $insert->role_id  = 1;
        $insert->status_memilih = false;
        $insert->pilihan_id = 0;
        $insert->save();
    }
}
