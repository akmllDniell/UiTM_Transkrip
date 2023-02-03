<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblTrys extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'idsukandt',        
        'idsukan',
        'idkelabdt',        
        'idkelab',
        'idkebudayaandt',        
        'idkebudayaan',
        'idberuniform',
        'idsijildt',        
        'idsijil',
        'idpenerbitandt',        
        'idpenerbitan',
        'idprogramtertentudt',
        'idprogramtertentu',
        'idpadudt',
        'idpadu',
        'userid',
        'status'       
    ];
}
