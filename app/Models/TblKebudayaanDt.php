<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblKebudayaanDt extends Model
{
    use HasFactory;
    protected $fillable = [
        'idmarkah',
        'idTP'
    ];
}
