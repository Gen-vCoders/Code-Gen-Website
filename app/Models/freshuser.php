<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freshuser extends Model
{
    use HasFactory;

    protected $table = 'freshusers'; 
    protected $fillable = [
        'email', 'password', 'address', 'city', 'state', 'gender', 'content'
    ];
}
