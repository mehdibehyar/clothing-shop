<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable=['name','label'];

    //for connect to users table
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    //for connect to roles table
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
