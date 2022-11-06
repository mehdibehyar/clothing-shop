<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    use HasFactory;

    protected $fillable=['title','image','user_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
