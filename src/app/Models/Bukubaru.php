<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bukubaru extends Model
{
    protected $table = 'bukubarus';
    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit',
        'penerbit',
    ];
}
