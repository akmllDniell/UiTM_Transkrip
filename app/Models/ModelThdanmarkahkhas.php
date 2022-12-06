<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelThdanmarkahkhas extends Model
{
    use HasFactory;
    protected $table = 'khas';
    protected $primaryKey = 'khasid';
    public $timestamps = false;
}
