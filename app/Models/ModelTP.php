<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTP extends Model
{
    use HasFactory;
    protected $table = 'tahap';
    protected $primaryKey = 'tahapid';
    public $timestamps = false;
}
