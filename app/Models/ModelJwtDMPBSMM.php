<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJwtDMPBSMM extends Model
{
    use HasFactory;
    protected $table = 'pbsmm';
    protected $primaryKey = 'pbsmmid';
    public $timestamps = false;
}
