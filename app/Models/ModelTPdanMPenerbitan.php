<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTPdanMPenerbitan extends Model
{
    use HasFactory;
    protected $table = 'penerbitan';
    protected $primaryKey = 'penerbitanid';
    public $timestamps = false;
}
