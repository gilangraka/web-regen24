<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class UsersExport implements FromCollection, WithHeadings, WithStrictNullComparison
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'NIM',
            'Email',
            'Login ID',
            'Password',
            'Role ID',
            'Status Memilih',
            'ID Pilihan'
        ];
    }
}
