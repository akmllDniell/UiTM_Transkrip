<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTPNMprogram extends Model
{
    use HasFactory;
    protected $table = 'program';
    protected $primaryKey = 'programid';
    public $timestamps = false;
}
