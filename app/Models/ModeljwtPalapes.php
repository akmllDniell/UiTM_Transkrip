<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeljwtPalapes extends Model
{
    use HasFactory;
    protected $table = 'jawatanpalapes';
    protected $primaryKey = 'jawatanpalapesid';
    public $timestamps = false;
}
