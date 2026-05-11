<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lpj extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'judul',
        'deskripsi',
        'file',
        'status',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELASI USER
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}