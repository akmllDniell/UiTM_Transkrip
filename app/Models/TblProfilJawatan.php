<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblProfilJawatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jawatan',
        'singkatan'
    ];
}
