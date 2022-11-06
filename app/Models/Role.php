<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable=['name','label'];

    //for connect to permission table
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    //for connect to users table
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
