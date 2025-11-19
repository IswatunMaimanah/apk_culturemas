<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edukasi extends Model
{
    protected $table = 'edukasi';
    protected $primaryKey = 'id_edukasi';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'konten',
        'link_video',
        'id_budaya',
        'id_user',
        'tanggal_dibuat'
    ];
}
