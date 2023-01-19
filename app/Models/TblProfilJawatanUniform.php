<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblProfilJawatanUniform extends Model
{
    use HasFactory;
    protected $fillable = [
        'jawatanuniform',
        'idBadanUniform'
    ];
}
