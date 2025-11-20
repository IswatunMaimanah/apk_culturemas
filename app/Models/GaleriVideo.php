<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleriVideo extends Model
{
    protected $table = 'galeri_video';
    protected $primaryKey = 'id_video';
    public $timestamps = false;

    protected $fillable = [
        'tumnail',
        'title',
        'url'
    ];
}
