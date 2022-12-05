<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJenisPersatuan extends Model
{
    use HasFactory;
    protected $table = 'jenispersatuan';
    protected $primaryKey = 'jenispersatuanid';
    public $timestamps = false;
}
