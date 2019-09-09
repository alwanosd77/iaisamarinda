<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Album;

class Photo extends Model
{
    protected $fillable = [
        'photo',
        'album_id',
    ];
    public function album()
    {
        return $this->belongsTo(Album::class,'album_id');
    }
}
