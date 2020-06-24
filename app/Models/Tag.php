<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $dates = ['published_at', 'created_at', 'updated_at', 'deleted_at'];
    protected $table = 'tags';

    protected $fillable = [
        'id',
        'name',
        'status',
        'creator',
        'publisher',
        'published_at'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'articles_tags', 'tags_id', 'articles_id');
    }
}
