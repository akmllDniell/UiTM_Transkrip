<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJwtDMPalapes extends Model
{
    use HasFactory;
    protected $table = 'palapes';
    protected $primaryKey = 'palapesid';
    public $timestamps = false;
}
