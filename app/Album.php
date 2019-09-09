<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Photo;
class Album extends Model
{
    protected $fillable = [
        'judul','slug',
    ];
    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
}
