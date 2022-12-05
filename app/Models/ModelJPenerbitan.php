<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJPenerbitan extends Model
{
    use HasFactory;
    protected $table = 'jenispenerbitan';
    protected $primaryKey = 'jenispenerbitanid';
    public $timestamps = false;
}
