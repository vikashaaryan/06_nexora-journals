<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManuScript extends Model
{
    protected $fillable = [
        'journal_id',
        'journal_name',
        'first_name',
        'last_name',
        'email',
        'affiliation',
        'manuscript_title',
        'abstract',
        'keywords',
        'file',
        'co_authors',
        'declaration_one',
        'declaration_two',
        'declaration_three',
    ];

    protected $casts = [
        'co_authors' => 'array',
        'declaration_one' => 'boolean',
        'declaration_two' => 'boolean',
        'declaration_three' => 'boolean',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
}
