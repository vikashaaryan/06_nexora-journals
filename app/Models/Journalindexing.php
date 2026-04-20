<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journalindexing extends Model
{
    protected $table = 'journalindexings';

    protected $guarded = [];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
}