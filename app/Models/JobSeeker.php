<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobSeeker extends Model
{
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $table = 'jobs_seekers';

    protected $fillable = [
        'users_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
