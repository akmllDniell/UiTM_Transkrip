<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblSukan extends Model
{
    use HasFactory;    
    protected $fillable = [
        'idmarkah',
        'idTP'
    ];

}
