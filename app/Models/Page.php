<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}