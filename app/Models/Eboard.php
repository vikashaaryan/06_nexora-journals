<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eboard extends Model
{
     protected $fillable = [
        'journal_id',
        'name',
        'designation',
        'institution',
        'address',
        'image',
        'short_description',
        'full_profile',
        'is_active',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
}
