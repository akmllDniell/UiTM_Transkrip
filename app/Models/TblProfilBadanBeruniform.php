<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblProfilBadanBeruniform extends Model
{
    use HasFactory;

    protected $fillable = [
        'badanuniform',
        'singkatan'
    ];
}
