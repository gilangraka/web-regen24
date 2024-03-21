<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefRoleID extends Model
{
    use HasFactory;
    protected $table = "ref_role_id";
    public $timestamps = false;
    protected $fillable = ["nama_role"];
}
