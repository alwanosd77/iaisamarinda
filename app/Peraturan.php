<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Unduhan;
class Peraturan extends Model
{
    protected $fillable = [
        'label','slug',
    ];
    public function unduhan()
    {
        return $this->hasMany(Unduhan::class);
    }
}
