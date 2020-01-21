<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'identification', 
        'initial_date', 
        'final_date', 
        'advance', 
        'type_id', 
        'user_id',
        'university_id',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function objective()
    {
        return $this->belongsTo(Objective::class);
    }
}
