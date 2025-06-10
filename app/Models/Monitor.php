<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $table = 'monitor';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'merkmonitor',
        'hargamonitor',
        'tersedia',
        'berat',
    ];
}
