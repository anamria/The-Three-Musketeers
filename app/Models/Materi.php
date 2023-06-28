<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'id_materi',
    //     'judul',
    //     'isi_materi',
    // ];

    protected $table = 'materis';
}
