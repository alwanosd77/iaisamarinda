<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Artikel extends Model
{
    protected $fillable = [
        'judul','isi','cover','penulis','is_draft','user_id','slug'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
