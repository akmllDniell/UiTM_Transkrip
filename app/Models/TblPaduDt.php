<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblPaduDt extends Model
{
    use HasFactory;

    protected $fillable = [              
        'idmarkah',
        'idTP'
    ];    

}