<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table = 'request_penarikan';

    protected $fillable = [
        'name',
        'tanggal',
        'jumlah',
        'status',
        'user_id',
    ];
}
