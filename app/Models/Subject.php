<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
     protected $fillable = [
        'title',
        'image',
        'short_description',
        'description',
        'is_active',
    ];

    public function journals()
    {
        return $this->hasMany(Journal::class);
    }
    
}
