<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpanJawatandanMarkahsuksis extends Model
{
    use HasFactory;
    protected $table = 'suksis';
    protected $primaryKey = 'suksisid';
    public $timestamps = false;
}
