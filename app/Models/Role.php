<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use SoftDeletes, hasFactory;

    protected $fillable = [
        'role_name',
        'description',
        'created_at',
        'updated_at'
    ];
    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
