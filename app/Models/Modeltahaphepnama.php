<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeltahaphepnama extends Model
{
    use HasFactory;
    protected $table = 'tahaphep';
    protected $primaryKey = 'tahaphepid';
    public $timestamps = false;
}

