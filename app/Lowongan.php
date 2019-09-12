<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Lowongan extends Model
{
    protected $fillable = [
        'judul','slug','isi','pemberi_kerja','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
