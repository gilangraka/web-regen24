<?php

namespace Database\Seeders;

use App\Models\RefRoleID;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RefRoleIDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["role_id" => 0, "nama_role" => "Panitia Regenerasi"],
            ["role_id" => 1, "nama_role" => "User Biasa"],
        ];

        foreach ($data as $i) {
            $insert = new RefRoleID;
            $insert->role_id = null;
            $insert->nama_role = $i["nama_role"];
            $insert->save();
        }
    }
}
