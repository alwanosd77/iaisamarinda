<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Peraturan;
class Unduhan extends Model
{
    protected $fillable = [
        'nama','filename','peraturan_id','user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function peraturan()
    {
        return $this->belongsTo(Peraturan::class,'peraturan_id');
    }
}
