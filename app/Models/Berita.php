<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    protected $fillable = [

        'judul',
        'slug',
        'isi',
        'thumbnail',
        'kategori',
        'penulis_id',
        'status',
        'published_at',

    ];

    /*
    |--------------------------------------------------------------------------
    | AUTO SLUG
    |--------------------------------------------------------------------------
    */

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($berita) {

            $berita->slug = Str::slug($berita->judul);

        });
    }

    /*
    |--------------------------------------------------------------------------
    | RELASI PENULIS
    |--------------------------------------------------------------------------
    */

    public function penulis()
    {
        return $this->belongsTo(User::class, 'penulis_id');
    }
}