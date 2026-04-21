<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    
    protected $fillable = [
        'journal_id',
        'name',
        'is_active',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
    public function articles()
{
    return $this->hasMany(\App\Models\Article::class);
}
}
