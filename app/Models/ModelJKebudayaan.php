<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJKebudayaan extends Model
{
    use HasFactory;
    protected $table = 'jeniskebudayaan';
    protected $primaryKey = 'jeniskebudayaanid';
    public $timestamps = false;
}
