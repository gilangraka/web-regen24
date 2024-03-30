<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusVote extends Model
{
    use HasFactory;
    protected $table = "status_vote";
    public $timestamps = false;
    protected $fillable = ["status"];
}
