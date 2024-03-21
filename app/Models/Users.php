<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKey = "id_user";
    protected $fillable = ["nama", "nim", "email", "id_login", "password", "role_id", "status_memilih", "pilihan_id"];
}
