<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'journal_id',
        'volume_id',
        'issue_id',
        'paper_title',
        'article_type',
        'author_name',
        'page_number',
        'year',
        'doi',
        'keywords',
        'abstract',
        'upload_link',
        'upload_doc',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }

    public function volume()
    {
        return $this->belongsTo(Volume::class);
    }

    public function issue()
    {
        return $this->belongsTo(Issue::class);
    }
}
