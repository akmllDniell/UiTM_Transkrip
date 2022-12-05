<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTPdanMarkahAnugerah extends Model
{
    use HasFactory;
    protected $table = 'anugerah';
    protected $primaryKey = 'anugerahid';
    public $timestamps = false;
}
