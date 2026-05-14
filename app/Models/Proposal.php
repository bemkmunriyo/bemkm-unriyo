<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
    'judul',
    'deskripsi',
    'nominal',
    'waktu_pelaksanaan',
    'file',
    'status',
    'user_id'
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