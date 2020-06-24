<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $table = 'roles';
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne('App\User', 'roles_id', 'id');
    }
}
