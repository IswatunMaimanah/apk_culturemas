<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleriDokumen extends Model
{
    protected $table = 'galeri_dokumen';
    protected $primaryKey = 'id_dokumen';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'lokasi',
        'image_url'
    ];
}
