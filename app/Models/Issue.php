<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
     protected $fillable = [
        'journal_id',
        'name',
        'show_on_frontend',
        'password',
        'is_active',
    ];

    protected $casts = [
        'show_on_frontend' => 'boolean',
        'is_active' => 'boolean',
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
