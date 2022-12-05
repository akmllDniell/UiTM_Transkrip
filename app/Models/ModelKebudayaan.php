<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelKebudayaan extends Model
{
    use HasFactory;
    protected $table = 'kebudayaan';
    protected $primaryKey = 'kebudayaanid';
    public $timestamps = false;
}
