<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    protected $fillable = [

        'nama',
        'nim',
        'kategori',
        'isi_aspirasi',
        'status'

    ];
}