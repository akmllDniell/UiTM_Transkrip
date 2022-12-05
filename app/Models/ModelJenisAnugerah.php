<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJenisAnugerah extends Model
{
    use HasFactory;
    protected $table = 'jenisanugerah';
    protected $primaryKey = 'jenisanugerahid';
    public $timestamps = false;

}
