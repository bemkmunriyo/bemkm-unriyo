<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [

        'user_id',
        'judul',
        'deskripsi',
        'file',
        'status',

    ];
public function ormawa()
{
    return $this->belongsTo(User::class, 'user_id');
}
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