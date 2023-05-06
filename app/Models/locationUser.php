<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locationUser extends Model
{
    use HasFactory;
     protected $fillable = [
        'id', 'name','image','email','location_id'
    ];
}
