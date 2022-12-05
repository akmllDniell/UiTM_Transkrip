<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAktiviti extends Model
{
    use HasFactory;
    protected $table = 'tbl_aktiviti';
    protected $primaryKey = 'AktivitiCode';
    public $timestamps = false;

}