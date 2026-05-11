<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

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
}