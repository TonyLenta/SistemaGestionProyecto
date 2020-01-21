<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model  //ESCUELAS
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
