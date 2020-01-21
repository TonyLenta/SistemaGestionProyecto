<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model  //TITULO
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
