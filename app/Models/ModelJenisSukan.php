<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJenisSukan extends Model
{
    use HasFactory;
    protected $table = 'jenissukan';
    protected $primaryKey = 'jenissukanid';
    public $timestamps = false;

}
