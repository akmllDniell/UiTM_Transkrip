<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblUniform extends Model
{
    use HasFactory;
    protected $fillable = [
        'idmarkah',        
        'bdnuni',
        'jwtuni'
    ];
}
