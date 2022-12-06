<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeljawatansuksis extends Model
{
    use HasFactory;
    protected $table = 'jawatansuksis';
    protected $primaryKey = 'jawatansuksisid';
    public $timestamps = false;
}
