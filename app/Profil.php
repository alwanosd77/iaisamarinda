<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Profil extends Model
{
    protected $fillable = [
        'judul','slug','isi'
    ];
}
