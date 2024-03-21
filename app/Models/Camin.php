<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camin extends Model
{
    use HasFactory;
    protected $table = "camin";
    protected $primaryKey = "id_camin";
    protected $fillable = ["nama", "visi", "misi", "foto"];
}
