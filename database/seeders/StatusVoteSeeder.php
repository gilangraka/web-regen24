<?php

namespace Database\Seeders;

use App\Models\StatusVote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insert = new StatusVote;
        $insert->status = 0;
        $insert->save();
    }
}
