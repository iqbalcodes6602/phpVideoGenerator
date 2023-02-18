<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_video extends Model
{
    use HasFactory;
    protected $table = "user_video";
    protected $primaryKey = "id";
}
