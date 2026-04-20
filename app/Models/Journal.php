<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $guarded = [];

    public function menus()
    {
        return $this->hasMany(Menu::class)
            ->whereNull('parent_id')
            ->where('is_active', 1)
            ->orderBy('sort_order');
    }

    public function allMenus()
    {
        return $this->hasMany(Menu::class)->orderBy('sort_order');
    }

    public function indexings()
    {
        return $this->hasMany(JournalIndexing::class)
            ->where('is_active', 1)
            ->orderBy('sort_order');
    }
  

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

   
}
