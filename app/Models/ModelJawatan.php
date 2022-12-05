<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJawatan extends Model
{
    use HasFactory;
    protected $table = 'jawatan';
    protected $primaryKey = 'jawatanid';
    public $timestamps = false;
}
