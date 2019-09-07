<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Agenda extends Model
{
    protected $fillable = [
        'judul','lokasi','tamu','isi','user_id','slug'
    ];
    protected $dates = ['waktu'];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
