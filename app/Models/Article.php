<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $dates = ['published_at', 'created_at', 'updated_at', 'deleted_at'];
    protected $table = 'articles';

    protected $fillable = [
        'id',
        'title',
        'image',
        'content',
        'comment',
        'status',
        'like',
        'creator',
        'publisher',
        'published_at'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'articles_tags', 'articles_id', 'tags_id');
    }
}
