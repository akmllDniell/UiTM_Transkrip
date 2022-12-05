<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMarkah extends Model
{
    use HasFactory;
    protected $table = 'markah';
    protected $primaryKey = 'markahid';
    public $timestamps = false;
}
