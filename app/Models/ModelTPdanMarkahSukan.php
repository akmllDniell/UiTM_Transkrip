<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTPdanMarkahSukan extends Model
{
    use HasFactory;
    protected $table = 'sukan';
    protected $primaryKey = 'sukanid';
    public $timestamps = false;
}
