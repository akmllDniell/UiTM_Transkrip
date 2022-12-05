<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTPMarkahPersatuan extends Model
{
    use HasFactory;
    protected $table = 'persatuan';
    protected $primaryKey = 'persatuanid';
    public $timestamps = false;
}
