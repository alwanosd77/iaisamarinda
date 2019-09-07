<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Berita extends Model
{
    protected $fillable = [
        'judul','preview','isi','cover','sumber','is_draft','user_id','slug'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
