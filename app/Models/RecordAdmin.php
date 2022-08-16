<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordAdmin extends Model
{
    use HasFactory;

    protected $table = 'records_admin';
    
    protected $fillable = [
        'name',
        'tanggal',
        'berat',
        'debet',
        'kredit',
        'saldo'
    ];
}
