<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJenisKhas extends Model
{
    use HasFactory;
    protected $table = 'jeniskhas';
    protected $primaryKey = 'jeniskhasid';
    public $timestamps = false;
}




