<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'login_id',
        'password',
        'role_id',
        'status_memilih',
        'camin_id'
    ];

    // protected $hidden = [
    //     'password',
    // ];
}
